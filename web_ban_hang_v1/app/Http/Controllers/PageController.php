<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
use App\Rules\checkPass;
class PageController extends Controller
{
    protected $listBrand;
    protected $listCategories;
    protected $listProduct;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->listCategories = DB::table('categories')->get();
        $this->listBrand = DB::table('brand')->get();
        $this->listProduct = DB::table('product')->paginate(12);
    }

    public function getCategories()
    {
        return $this->listCategories;
    }

    public function getBrand()
    {
        return $this->listBrand;
    }

    public function getProduct()
    {
        return $this->listProduct;
    }

    public function getListProduct()
    {
        $listCategories = $this->getCategories();
        $listBrand = $this->getBrand();
        $listProduct = $this->getProduct();
        return view('index',compact('listCategories','listBrand','listProduct'));
    }

    public function backRegister()
    {
        return view('register');
    }

    public function Register(request $request)
    {
        $this->validate($request,
            [
                'full_name'=>'required|regex:[^[a-zA-Z0-9]]',
                'email'=>'required|email|unique:user_info,email',
                'password'=>'required|regex:[^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$]',
                'mobile'=>'required|numeric|regex:[0[0-9]{9}]'
            ],

            [
                'full_name.required'=>'Vui long nhap Fullname',
                'full_name.regex'=>'Fullname có kí tự đặc biệt',
                'email.required'=>'Vui long nhap email',
                'email.email'=>'Khong dung dinh dang email',
                'email.unique'=>'Email ton tai',
                'password.required'=>'Vui long nhap password',
                //'password.min'=>'Password phai co 6 ki tu',
                'password.regex'=>'Password phải có 6 kí tự  1 kí tự viêt hoa và 1 kí tự đặc biệt',
                'mobile.required'=>'Vui long nhap so dien thoai',
                'mobile.regex'=>'Mobile phải bắt đầu bằng số 0 và mobile có 10 số',
                'mobile.numeric'=>'Mobile phải là số',
                //'mobile.max'=>'Mobile phải có 10 số',
            ]
        );

        $user = new User();
        $user->fullname = $request->full_name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->mobile = $request->mobile;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->role = 1;
        $user->save();
        return redirect()->back()->with('success','Đăng kí tài khoản thành công');
    }
    public function re_Login()
    {
        return view('login');
    }
    public function Login(request $rq)
    {
        if(Auth::attempt(['email'=>$rq->l_email,'password'=>$rq->l_password])){
            $rq->session()->put('name',Auth::User()->email);
            $rq->session()->put('id',Auth::User()->id);
            return redirect('/');
        }
        else{
            return redirect()->back()->with('loi','Login fail');
        }
    }

    public function Logout(request $rq)
    {
        $rq->session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function Profile($id,request $rq)
    {
        $user = User::find($id);
        if($user->role==1){
            return view('user.profile-user',compact('user'));
        }
        else{
            $rq->session()->put('id_admin',$user->id);
            $rq->session()->put('email_admin',$user->email);
            $rq->session()->put('name_admin',$user->fullname);
            return view('admin.admin-quanly');
        }
    }

    public function ChangeProfile(request $rq,$id)
    {
        $user = User::find($id);
        $user->fullname = $rq->change_f_name;
        $user->mobile = $rq->change_mobile;
        $user->address1 = $rq->change_address1;
        $user->address2 = $rq->change_address2;

        $user->save();
        return redirect()->back();
    }

    public function EditPassword($id)
    {
        $user = User::find($id);
        return view('user.change-pass',compact('user'));
    }

    public function ChangePassword(request $rq,$id)
    {
        $this->validate($rq,
            [
                'change_pass1'=>['required',new checkPass],
                'change_pass2'=>'required|same:change_pass3',
                'change_pass3'=>'required'
            ],

            [
                'change_pass1.required'=>'Re-enter your old password not required',
                'change_pass2.required'=>'New password not required',
                'change_pass3.required'=>'Re-enter new password not required',
                'change_pass2.same' => 'New password and Re-enter new password not same'
            ]
        );
        $user = User::find($id);
        $user->password = hash::make($rq->change_pass2);

        $user->save();
        return redirect()->back()->with('change','Thay đổi mật khẩu thành công');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use App\Brand;
use Illuminate\Support\Facades\DB;
class QuanLyProductController extends Controller
{
    //
    public function getListProduct()
    {
    	$product = Product::all();
    	return view('admin.ds-product',compact('product'));
    }

    public function re_addProduct()
    {
    	$listCategories = DB::table('categories')->get();
        $listBrand = DB::table('brand')->get();
    	return view('admin.product.add_product',compact('listCategories','listBrand'));
    }
    public function addProduct(Request $request){
    	// Thông báo khi xảy ra lỗi
        $messages = [
            'image' => 'Định dạng không cho phép',
            'max' => 'Kích thước file quá lớn',
        ];
        // Điều kiện cho phép upload
    	$this->validate($request, [
		    'file' => 'image|max:2028',
		], $messages);

		if($request->hasFile('myFile')){
			$file = $request->file('myFile');
			$namefile = $file->getClientOriginalName();
			$file->move('assets\prod_images',$namefile);

			$product = new Product();
			$product->product_cat = $request->cate_id;
			$product->product_brand = $request->brand_id;
			$product->product_title = $request->pro_title;
			$product->product_price = $request->pro_price;
			$product->product_desc = $request->pro_desc;
			$product->product_image = $namefile;
			$product->product_keywords = $request->pro_keyword;

			$product->save();

			return redirect()->route('lay-ds-product');
		}
    }

    public function deleteProduct($id)
    {
    	$product = Product::find($id);
    	$product->delete();

    	return redirect()->route('lay-ds-product');
    }

    public function re_editProduct($id)
    {
    	$product = Product::find($id);
    	$cate = Categories::all();
    	$brand = Brand::all();
    	return view('admin.product.edit_product',compact('product','cate','brand'));
    }

    public function updateProduct(request $request,$id)
    {
    	$messages = [
            'image' => 'Định dạng không cho phép',
            'max' => 'Kích thước file quá lớn',
        ];
        // Điều kiện cho phép upload
    	$this->validate($request, [
		    'file' => 'image|max:2028',
		], $messages);

		if($request->hasFile('myFile')){
			$file = $request->file('myFile');
			$namefile = $file->getClientOriginalName();
			$file->move('assets\prod_images',$namefile);

			$product = Product::find($id);

	    	$product->product_cat = $request->cate_id;
			$product->product_brand = $request->brand_id;
			$product->product_title = $request->pro_title;
			$product->product_price = $request->pro_price;
			$product->product_desc = $request->pro_desc;
			$product->product_image = $namefile;
			$product->product_keywords = $request->pro_keyword;

			$product->save();

			return redirect()->route('lay-ds-product');
		}
    	
    }
}

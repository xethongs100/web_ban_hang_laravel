<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    //
	public function uploadFile(Request $request){
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
			$file->move('assets\prod_images',$namefile.'.jpg');
		}
		else{
			echo 'chua co file';
		}
    }
}

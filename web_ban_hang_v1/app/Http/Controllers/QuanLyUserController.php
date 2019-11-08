<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class QuanLyUserController extends Controller
{
    //
    public function getListUser()
    {
    	$dsUser = User::where('role','=',1)->get();
    	return view('admin.ds-user',compact('dsUser'));
    }

    public function deleteUser($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->route('lay-ds-user');
    }
}

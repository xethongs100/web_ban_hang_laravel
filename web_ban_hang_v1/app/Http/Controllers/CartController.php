<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
    //
    public function addCart($id,Request $request)
    {
    	if($request->qty){
    		$qty = $request->qty;
    	}
    	else{
    		$qty = 1;
    	}
    	$product = Product::find($id);
    	$cart = [
    		'id' => $product->id, 
    		'name'=> $product->product_title,
    		'price'=> $product->product_price,
    		'weight'=>0,
    		'qty'=> $qty,
    		'options'=>[
    			'img'=> $product->product_image
    		]
    	];
    	Cart::add($cart);
    	//$request->session()->put('count',Cart::count());
    	return back()->with('thongbao','Thêm sản phẩm '.$product->product_title.' thành công');
    }

    public function show_cart()
    {
    	$listCart = Cart::content();
    	$total = Cart::subtotal();
    	return view('cart.add_cart',compact('listCart'));
    }

    public function delete_cart($id)
    {
    	Cart::remove($id);
    	return back();
    }

    public function updateCart(Request $request)
    {
    	//dd($req->input('quantity'));
    	if($request->ajax()){
    		$id = $request->id;
    		$qty = $request->qty;
    		Cart::update($id,$qty);
    		return "oke";
    	}
    }
}

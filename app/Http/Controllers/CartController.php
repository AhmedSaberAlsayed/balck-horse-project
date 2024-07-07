<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCArt()
    {
        $id= Auth::user()->id;
        $cart= cart::where('user_id',$id)
        ->with(['user','product'])
        ->get();
        // dd($cart);
        return view('CArt.Create',compact('cart'));
    }

    public function addcart(Request $request,$id)
    {
        if (Auth::id()) {
            $user=Auth::user();
            $product= product::find($id);
            $quantity= $request->quantity;
            $totalPrice =  $quantity * $product->price;
            $cart= new Cart;
            $cart->user_id =$user->id; 
            $cart->product_id =$product->id; 
            $cart->quantity =$quantity; 
            $cart->total_price =$totalPrice; 
            $cart->save();
            return redirect()->back();
        }else{
            return redirect()->route('show_login');
        }
    }
}

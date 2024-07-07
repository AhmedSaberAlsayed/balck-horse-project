<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\orderItem;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    public function cash()
    {
        $userid = Auth::user()->id;
        $datas= cart::where('user_id',$userid)->get();
        $amount=0;
        foreach ($datas as  $value) {
            $amount= $amount + $value->total_price;
        }
        $order=order::create([
            'order_date'=> date('Y-m-d H:i:s'),
            'total_amount'=>$amount
        ]);
        foreach($datas as $data){
            $orderitem = new orderItem;
            $orderitem->total_price = $data->total_price;
            $orderitem->quantity = $data->quantity;
            $orderitem->user_id = $data->user_id;
            $orderitem->product_id = $data->product_id;
            $orderitem->order_id = $order->id;
            $orderitem->save();
            $data->delete();
        }

    }
}

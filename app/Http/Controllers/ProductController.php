<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request ;
use App\Http\Traits\ImagesTrait;


class ProductController extends Controller
{
    use ImagesTrait;
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $fileName = time() . '.' . $request->imgpath->extension();
        $this->uploadimg($request->imgpath, $fileName, 'products');
        product::create([
            'Product_name'=> $request->Product_name,
            'description'=> $request->description,
            'price'=> $request->price,
            'quantity'=> $request->quantity,
            'category_id'=> $request->category_id,
            'imgpath'=>$fileName,
        ]);
        return redirect()->route('index_product');

    }

    public function index(){
        $products= product::all();
        return view('products.index',compact('products'));
    }

    // public function edit(Request $request){
    // $products=product::where('id',$request->id)->first();
    // // dd($products);
    //     return view('products.edit',compact('products'));
    // }
    // public function update(Request $request){
    //     $product=product::where('id',$request->id)->first();
    //     $product->update([
    //         'Product_Name'=> $request->Product_Name,
    //         'Product_Description'=> $request->Product_Description,
    //         'Price'=> $request->Price,
    //         'Quantity'=> $request->Quantity,
    //     ]);
    //     return redirect()->route('index_product');

    // }

    // public function delete($id){
    // $product=product::find($id);
    // $product->delete();
    // return redirect()->route('index_product');
    // }
    public function show(){}


}

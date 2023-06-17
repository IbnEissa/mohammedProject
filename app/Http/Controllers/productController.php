<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function show () {
        $product=Product::all();
        $arr = Array('product' =>$product);

        return view('product.home',$arr);


    }

    public function addProduct (Request $request){
        if ($request->isMethod('post')){

            $newProduct = new Product;
            $newProduct->name = $request->input('name');
            $newProduct->quantity = $request->input('quantity');
            $newProduct->type = $request->input('type');
            $newProduct->save() ;


        }
        return redirect("home");


    }

    public function editProduct (Request $Request,$id){
//        dd($Request->all());
        if($Request->isMethod('post')){

            $pro = Product::find($id);
            $pro->name = $Request->input('name');
            $pro->quantity =$Request->input('quantity');
            $pro->type =$Request->input('type');
            $pro->save();
        }
        return redirect("home");

    }

}

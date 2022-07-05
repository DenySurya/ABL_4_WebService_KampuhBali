<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $data = Product::all();
        return view('admin/produk' , compact('data'));

    }

    public function tambahproduk(){

        $data = Product::all();
        return view('admin/tambahProduk');

    }

    public function tambahdata(Request $request){

        dd($request->all());
        Product::create($request->all());
        return redirect()->route('produk');
        

    }
}

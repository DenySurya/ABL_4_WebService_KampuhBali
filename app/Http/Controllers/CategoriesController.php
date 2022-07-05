<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(){

        $datakategori = Categories::all();
        return view('admin/kategori' , compact('datakategori'));

    }
}

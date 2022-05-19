<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function indexx()
    {
        return response()->json([
            'message' => 'ini halaman form'
        ],200);
    }
}

<?php

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\AuthorCollection;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\CategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => 'auth:sanctum' ], function(){
  
    // Route::get('/form',[FormController::class, 'index']);
    Route::get('/product',[ProductController::class, 'index']);
    // Route::get('/product',[ProductController::class, 'getProduct']);
    Route::get('/category',[CategoriesController::class, 'index']);
    Route::post('/product',[ProductController::class, 'store']);
    Route::post('/category',[CategoriesController::class, 'store']);
    Route::post('/product/image',[ProductController::class, 'upload']);
    Route::post('/product/{id}',[ProductController::class, 'update']);
    Route::get('/product/{id}',[ProductController::class, 'edit']);
    Route::delete('/product/{id}',[ProductController::class, 'destroy']);
    Route::get('/logout',[AuthController::class, 'logout']);
    Route::get('/user/{id}', [UserController::class, 'edit']);
    
});

Route::post('/login', [AuthController::class , 'login']);
Route::post('/register', [AuthController::class , 'register']);


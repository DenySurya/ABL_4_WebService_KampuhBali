<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    // public function register(Request $request)
    // {
    //     $this->validate($request,[
    //         'name' => ['required','string','max:255'],
    //         'email' => ['required','email','unique:users',],
    //         'password' => ['required','min:6','max:50']
    //     ]);

    //     $user = User::create([
    //     	'name' => $request->name,
    //     	'email' => $request->email,
    //     	'password' => !Hash::make($request->password)
    //     ]);

    //     $token = $user->createToken('token')->plainTextToken;

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'User created successfully',
    //         'data' => $user,
    //         'token' => $token,
    //     ], 200);
    // }


    public function Login(Request $request)
    {
        $user = User::where('email', $request->email)->first();


        if (!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized'
            ], 401);
        }
        

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'succes',
            'user' => $user,
            'token' => $token,
        ],200);
    }

    public function logout (Request $request){
        $user = $request->user();
        $user->currentAccessToken()->delete();
        return response()->json(
            [
                'success' => true,
                'message' => 'Logout Success',
            ], 200);
    }
}

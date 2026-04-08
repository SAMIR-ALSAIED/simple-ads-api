<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


use ApiResponse;

public function register(RegisterRequest $request){

    $data=$request->validated();

    $user=User::create([
        'name'=>$data['name'],
        'email'=>$data['email'],
        'password'=>Hash::make($data['password']),
    ]);



    $token=$user->createToken('auth_token')->plainTextToken;


    return $this->successResponse(201, 'user Registered Successfully',
    [
        'user'=>$user,
        'token'=>$token
    ]

    );
    




}


public function login(LoginRequest $request){

    $data=$request->validated();

     $credentials = $request->only('email', 'password');
     
    if(!Auth::attempt($credentials)){
        return $this->errorResponse(401,'Invalid Credentials');
    }

    $user=Auth::user();

    $token=$user->createToken('auth_token')->plainTextToken;



    return $this->successResponse(200, 'User Logged in Successfully',
    [
       
        'name'=>$user->name,
        'email'=>$user->email,

        'token'=>$token
    ]

    );


}


  public function logout(Request $request){

    $request->user()->currentAccessToken()->delete();

        return $this->successResponse(200, 'User Logged out Successfully',null);

    }








}
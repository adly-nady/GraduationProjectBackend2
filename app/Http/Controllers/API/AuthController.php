<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $R)
    {
        $val = Validator::make($R->all(),['email'=>'required','password'=>'required']);

        if($val->fails())
        {
            return ReturnError(403,$val->errors());
        }

        $row = User::where('email',$R->email)->get();
        if(collect($row)->isEmpty())
        {
            return ReturnError(403,['email'=>['Email not found']]);
        }

        if($token = JWTAuth::attempt(['email' => $R->email, 'password' => $R->password]))
        {
            JWTAuth::setToken($token);
            return ReturnDone($token,Auth::user()->FullName." مرحبا يا");
        }else{
            return ReturnError(403,['password'=>['Incorrect Password']]);
        }
    }
}

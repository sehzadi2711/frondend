<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class LoginController extends CommonApiController
{
    
    public function login(Request $request)
    {
        try {
            CommonApiController::isJsonRequest($request);

            $validator = Validator::make($request->all(), [
                'email' => 'required|exists:users',
                'password' => 'required|string',
            ]);

            CommonApiController::checkValidation($validator);
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
                $user->save();
                $token = $user->createToken('myapptoken')->plainTextToken;
                
                $userRecord['token'] = $token;
                $userRecord['id'] = $user->id;
                $userRecord['name'] = $user->name;
                $userRecord['user_access_token'] = $token;
                
                return CommonApiController::endRequest(true, 200, 'Login Successfully.', array($userRecord));
            } else {
                return CommonApiController::endRequest(false, 205, 'Invalid Email Or Password!!!');
            }
        } catch (Exception $ex) {
            return CommonApiController::endRequest(false, 205, $ex->getMessage());
        }
    }

    public function logout(Request $request)
    {
        try {
            $accessToken = auth()->user()->tokens()->delete();
            return CommonApiController::endRequest(true, 200, 'User logout successfully.');
        } catch (Exception $ex) {
            return CommonApiController::endRequest(false, 205, $ex->getMessage());
        }
    }

}

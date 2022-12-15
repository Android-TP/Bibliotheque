<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\Auth\LoginRequest;


class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {

    if (!Auth::attempt($request->only('email', 'password'))) {
    return response()->json([
    'message' => 'Invalid login details'
               ], 401);
           }

    $user = User::where('email', $request['email'])->firstOrFail();

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
               'access_token' => $token,
               'token_type' => 'Bearer',
    ]);
    }
        public function sendResponse($result, $message)
        {
            $response = [
                'success' => true,
                'data'    => $result,
                'message' => $message,
            ];


            return response()->json($response, 200);
        }

        /**
         * return error response.
         *
         * @return \Illuminate\Http\Response
         */
        public function sendError($error, $errorMessages = [], $code = 404)
        {
            $response = [
                'success' => false,
                'message' => $error,
            ];


            if(!empty($errorMessages)){
                $response['data'] = $errorMessages;
            }


            return response()->json($response, $code);
        }
}

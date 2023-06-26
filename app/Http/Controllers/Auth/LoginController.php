<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string',
            'remember' => ['required', 'in:true,false'],
        ]);
        if (!$validator->fails()) {
            $admin = User::where('email', $request->input('email'))->first();
            if (!$admin) {
                return response()->json(
                    ['message' => 'Wrong email or password.'],
                    Response::HTTP_BAD_REQUEST
                );
            }
            if (Hash::check($request->input('password'), $admin->password)) {
                Auth::login($admin, $request->input('remember'));
                return response()->json(
                    ['message' => 'Logged in Successfully!'],
                    Response::HTTP_OK
                );
            } else {
                return response()->json(
                    ['message' => 'Wrong Email or Password'],
                    Response::HTTP_BAD_REQUEST
                );
            }
        } else {
            return response()->json([
                'message' => $validator->getMessageBag()->first(),
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }
}

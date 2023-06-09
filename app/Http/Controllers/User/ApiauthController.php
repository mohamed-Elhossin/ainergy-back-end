<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiauthController extends Controller
{

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => "required",
            "email" => "required|unique:users,email|email",
            'password' => "required|confirmed",
            'type' => "required"
        ]);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'type'=>$data['type']
        ]);

        $token = $user->createToken('myToken')->plainTextToken;
        $reponse = [
            'user' => $user,
            "token" => $token,
            "Message" => "welcome new User",
        ];
        return response($reponse, 200);
    }


    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => "required",
            'password' => "required"
        ]);

        $user = User::where("email", '=', $data['email'])->first();

        if (!$user ||  !Hash::check($data['password'], $user->password)) {
            return response("Please Enter right password or email", 401);
        }
        $token = $user->createToken('myToken')->plainTextToken;
        $reponse = [
            'user' => $user,
            "token" => $token,
            "Message" => "Login true",
        ];
        return response($reponse, 200);
    }

    public  function logout()
    {
        auth()->user()->tokens()->delete();
        return [
            "message" => "Log Out true"
        ];
    }
}

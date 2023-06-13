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
    public function update(Request $request,$id)
    {
        $data = $request->validate([
            'name' => "required",
            "email" => "required|unique:users,email,$id",
            'password' => "required|confirmed",
            'type' => "required"
        ]);
        $user = User::find($id); // Assuming you have the user's ID

        if ($user) {
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->type = $data['type'];

            $user->save();

            // Update successful
        } else {
            // User not found
            $reponse = "User Not Found";
        }
        $reponse = [
            "Message" => " User Update Done",
            'user' => $user,
            "Status"=>200,
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

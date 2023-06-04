<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AuthController extends Controller
{


    public function adminRegister(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => "required",
            "email" => "required|unique:admins,email|email",
            'password' => "required"
        ]);

        $admin = new Admin();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);

        $admin->save();
        return redirect()->back()->with("done", "Insert True");
    }




    public function adminLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            "password" => "required"
        ]);

        if (Auth::guard('admin')->attempt([
            'email' => $request->email,
            "password" => $request->password
        ])) {
            return redirect()->route("admin.home");
            // dd($request);
        } else {
            return redirect()->route("admin.login")->with("false","Error Try Agien");
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route("admin.login");
    }
}

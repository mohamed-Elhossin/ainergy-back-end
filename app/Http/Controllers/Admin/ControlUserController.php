<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControlUserController extends Controller
{

    public function vendor()
    {
        $User = User::where('type', 'vendor')->get();
        return view('adminUI.users.vendor')->with("User", $User);
    }
    public function index()
    {
        $User = User::where('type', 'user')->get();
        return view('adminUI.users.index')->with("User", $User);
    }
    public function destroy($id)
    {
        $User =  User::find($id);
        // $oldFile = $User->image;
        // $filePathName = public_path() . "/upload/category/" . $oldFile;
        // unlink($filePathName);
        $User->delete();
        return redirect()->route('user.listAll')->with("done", "Deleted User Done");
    }

    public function  changeVendorStatus($id)
    {
        $User =  User::find($id);
        if ($User->status == "noActive") {
            $User->status = "active";
            $User->save();
        } else {
            $User->status = "noActive";
            $User->save();
        }

        return redirect()->back()->with("done", "Change Status Done ");
    }
}

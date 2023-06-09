<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ControlUserController extends Controller
{

    public function index()
    {
        $User = User::all();
        return view('adminUI.users.index')->with("User",$User );
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
}

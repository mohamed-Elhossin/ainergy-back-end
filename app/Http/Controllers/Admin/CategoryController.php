<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Caregory;

class CategoryController extends Controller
{

    public function index()
    {
        $category = Caregory::all();
        return view('adminUI.categories.index')->with("category",$category );
    }

    public function create()
    {
        return view('adminUI.categories.create');
    }


    public function store(Request $request)
    {
        $size = 2  * 1024;
        $request->validate([
            'title' => 'required|string',
            'description' => "required|string",
            'inputFile' => "required|file|max:$size|mimes:png,jpg,jif"
        ]);


        $Caregory = new Caregory();
        $Caregory->title = $request->title;
        $Caregory->description = $request->description;
        // File Code
        $drive_data =  $request->file("inputFile");
        $drive_name = time() . $drive_data->getClientOriginalName();
        $location = public_path('./upload/category');
        $drive_data->move($location, $drive_name);
        $Caregory->image = $drive_name;
        $Caregory->save();
        return redirect()->back()->with("done", "Save Category Done");
    }


    public function edit($id)
    {
        $category =  Caregory::find($id);
        return view('adminUI.categories.edit')->with("category",$category );

    }

    public function update(Request $request, $id)
    {
        $size = 2  * 1024;
        $request->validate([
            'title' => 'required|string',
            'description' => "required|string",
            'inputFile' => "file|max:$size|mimes:png,jpg,jif"
        ]);


        $Caregory =  Caregory::find($id);
        $Caregory->title = $request->title;
        $Caregory->description = $request->description;
        // File Code
        $drive_data =  $request->file("inputFile");
        if ($drive_data != null){
            // Update new file
            $drive_name = time() . $drive_data->getClientOriginalName();
            $location = public_path('./upload/category');
            $drive_data->move($location, $drive_name);
            // Delete old File if Update new File
            $oldFile = $Caregory->image;
            $filePathName = public_path() . "/upload/category/" . $oldFile;
            unlink($filePathName);
        }else{
            $drive_name= $Caregory->image;
        }

        $Caregory->image = $drive_name;
        $Caregory->save();
        return redirect()->route('category.index')->with("done", "Update Category Done");
    }

    public function destroy($id)
    {
        $Caregory =  Caregory::find($id);
        $oldFile = $Caregory->image;
        $filePathName = public_path() . "/upload/category/" . $oldFile;
        unlink($filePathName);
        $Caregory->delete();
        return redirect()->route('category.index')->with("done", "Deleted Category Done");
    }
}

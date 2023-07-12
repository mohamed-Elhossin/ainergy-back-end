<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\views\Joinserviceswithcategory;
use App\Models\Caregory;
use App\Models\Service;
use App\Models\Commint;
use App\Models\views\Joincommints;
use App\Models\Like;

class ServicesController extends Controller
{


    public function yourServices()
    {
        $vendorId =  auth()->user()->id;
        $Services = Joinserviceswithcategory::where("vendorId", "=", $vendorId)->get();
        return view('userUI.services.yourServices')->with("services", $Services);
    }
    public function createServices()
    {
        $category = Caregory::all();
        return view("userUI.services.createServices", compact('category'));
    }

    public function allServices()
    {
        $Services = Joinserviceswithcategory::all();
        return view('userUI.services.allservices')->with("services", $Services);
    }
    public function listServiceByCategory($id)
    {
        $Services = Joinserviceswithcategory::where("categoryId", "=", $id)->get();
        return view('userUI.services.listbycategory')->with("services", $Services);
    }
    public function joinData()
    {
        $Services = Joinserviceswithcategory::paginate(10);
        return view('adminUI.services.index')->with("services", $Services);
    }



    public function show($id)
    {
        $likeCount =  Like::where('servicesId', $id)
            ->where('status', 1)
            ->count();

        $userId = auth()->user()->id;
        $likeStatus =  Like::where('userId', $userId)
            ->where('servicesId', $id)->first();


        $commints = Joincommints::where("servicesId", $id)->get();
        $services = Joinserviceswithcategory::where('servId', $id)->first();
        return view('userUI.services.show', compact("services", "commints", "likeCount", 'likeStatus'));
    }


    public function create()
    {
        $category =  Caregory::all();
        return view('adminUI.services.create')->with("category", $category);
    }


    public function store(Request $request)
    {
        $size = 2  * 1024;
        $request->validate([
            'title' => 'required|string',
            'description' => "required|string",
            'inputFile' => "required|file|max:$size|mimes:png,jpg,jif"
        ]);


        $Service = new Service();
        $Service->title = $request->title;
        $Service->description = $request->description;
        // File Code
        $drive_data =  $request->file("inputFile");
        $drive_name = time() . $drive_data->getClientOriginalName();
        $location = public_path('./upload/services');
        $drive_data->move($location, $drive_name);

        $Service->image = $drive_name;

        $Service->category   = $request->category;

        $Service->vendor = auth()->user()->id;
        $Service->save();
        return redirect()->back()->with("done", "Save services Done");
    }

    public function destroy($id)
    {
        $Service =  Service::find($id);
        $oldFile = $Service->image;
        $filePathName = public_path() . "/upload/services/" . $oldFile;
        unlink($filePathName);
        $Service->delete();
        return redirect()->route('services.index')->with("done", "Deleted services Done");
    }

    public function lastactivity()
    {
        $Services = DB::table('services')->latest()->limit(10)->get();

        return view('adminUI.services.lastActivity')->with("services", $Services);
    }
}

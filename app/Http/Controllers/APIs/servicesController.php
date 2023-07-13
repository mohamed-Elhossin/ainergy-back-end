<?php

namespace App\Http\Controllers\APIs;

use App\Models\Like;
use App\Models\Service;
use App\Models\Caregory;
use Illuminate\Http\Request;
use App\Models\views\Joincommints;
use App\Http\Controllers\Controller;
use App\Models\views\Joinserviceswithcategory;

class servicesController extends Controller
{
    // /Show one Services With All Data Commint And likes
    public function showOne($id)
    {
        $likeCount =  Like::where('servicesId', $id)
            ->where('status', 1)
            ->count();

        $userId = auth()->user()->id;
        $likeStatus =  Like::where('userId', $userId)
            ->where('servicesId', $id)->first();


        $commints = Joincommints::where("servicesId", $id)->get();
        $services = Joinserviceswithcategory::where('servId', $id)->first();
        $response = [
            "message" => "Send One services",
            "Data" => [
                "services"=>$services,
                "likeCount"=>$likeCount,
                "commints"=>$commints
            ],
            "Status" => 200
        ];
        return response($response, 200);

        // return view('userUI.services.show', compact("services", "commints", "likeCount", 'likeStatus'));
    }

    public function listServiceByCategory($id)
    {
        $Services = Joinserviceswithcategory::where("categoryId", "=", $id)->get();

        $response = [
            "message" => "Send All Data",
            "Data" => $Services,
            "Status" => 200
        ];

        return response($response, 200);
    }
    public function index()
    {
        $Services = Joinserviceswithcategory::all();
        $response = [
            "message" => "Send All Data",
            "Data" => $Services,
            "Status" => 200
        ];
        return response($response, 200);
    }

    public function show($id)
    {
        $Services = Joinserviceswithcategory::where("servId",$id)->first();
        $response = [
            "message" => "Send One services",
            "Data" => $Services,
            "Status" => 200
        ];
        return response($response, 200);
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
        $Service->vendor = 1;
        $Service->save();

        $response = [
            "message" => "Create Services Data",
            "Data" => $Service,
            "Status" => 201
        ];
        return response($response, 201);
    }

    public function update(Request $request , $id)
    {
        $size = 2  * 1024;
        $request->validate([
            'title' => 'required|string',
            'description' => "required|string",
            'inputFile' => "required|file|max:$size|mimes:png,jpg,jif"
        ]);


        $Service =  Service::find($id);
        $Service->title = $request->title;
        $Service->description = $request->description;
        // File Code
        $drive_data =  $request->file("inputFile");
        if( $drive_data != null){
            $drive_name = time() . $drive_data->getClientOriginalName();
            $location = public_path('./upload/services');
            $drive_data->move($location, $drive_name);
             // Delete old File if Update new File
             $oldFile = $Service->image;
             $filePathName = public_path() . "/upload/services/" . $oldFile;
             unlink($filePathName);
        }else{
            $drive_name=   $Service->image;
        }

        $Service->image = $drive_name;
        $Service->category   = $request->category;
        $Service->vendor = 1;
        $Service->save();

        $response = [
            "message" => "Update Services Data",
            "Data" => $Service,
            "Status" => 201
        ];
        return response($response, 201);
    }

    public function destroy($id)
    {
        $Service =  Service::find($id);
        $oldFile = $Service->image;
        $filePathName = public_path() . "/upload/services/" . $oldFile;
        unlink($filePathName);
        $Service->delete();
        $response = [
            "message" => "Delete Services Done",
            "Data" => $Service,
            "Status" => 200
        ];
        return response($response, 201);
    }
}

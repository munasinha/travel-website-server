<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Resources\PackageResource;
use App\Http\Resources\PackageCollectionResource;
use Illuminate\Support\Facades\Storage;
use App\Models\Place;

class PackageController extends Controller
{

    public function index()
    {
        return PackageCollectionResource::collection(Package::all());
    }

  


    public function store(Request $request)
    {
        
        $this->validate($request, [

            'name'          =>    'required|unique:packages|max:255',
            'days'          =>    'required',
            'discription'   =>    'required',
            'more_info'     =>    'required',
            'image'         =>    'required|image',
      
        ]);

        $package = new Package;

        $package->name = $request->input('name');
        $package->days = $request->input('days');
        $package->discription = $request->input('discription');
        $package->more_info = $request->input('more_info');
        $package->image_path =  Storage::putFile('images/packages', $request->file('image'));

        $places_arr = array_map('intval', explode(',', $request->input('places')));

        $places = Place::find($places_arr);

        $package->save();
        $package->places()->attach($places);

        return "success";

    }



    public function show(Package $package)
    {
        $package->increment('viewCount');

        return new PackageResource($package);
    }




    public function update(Request $request, Package $package)
    {

        return $request;

        $this->validate($request, [

            'name'          =>    'unique:packages|max:255',

            'image'         =>    'image',
      
        ]);

        if($request->input('name') != null)
        {
            $package->days = $request->input('name');
        }

        if($request->input('days') != null)
        {
            $package->days = $request->input('days');
        }


        if($request->input('discription') != null)
        {
            $package->discription = $request->input('discription');
        }


        if($request->input('more_info') != null)
        {
            $package->more_info = $request->input('more_info');
        }


        if ($request->hasFile('image')) {

           $package->image_path = Storage::putFile('images/packages', $request->file('image'));

        }
        else 
        {
            $package->image_path = $package->image_path;
        }
            

        $pls = $request->input('places');

        $places = Place::find($pls);

        $package->update();
        $package->places()->attach($places);

        return "success";

    }



    public function destroy(Package $package)
    {
        $pack = Place::find($package->id);

        $package->places()->detach($pack);
        $package->delete();

        return "Successfuly Deleted ";
    }



    public function topPackages()
    {
        return PackageCollectionResource::collection(Package::orderBy('viewCount', 'desc')->limit(4)->get());
    }


}

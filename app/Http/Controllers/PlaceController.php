<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\PlaceCollectionResource;
use App\Http\Resources\PlaceResource;

class PlaceController extends Controller
{
   
    public function index()
    {
        return PlaceCollectionResource::collection(Place::all());
    }



    
    public function store(Request $request)
    {

        $this->validate($request, [

            'name'         =>    'required|unique:places|max:255',
            'lat'          =>    'required',
            'lan'          =>    'required',
            'map_name'     =>    'required',
            'discription'  =>    'required',
            'location'     =>    'required',
            'image'        =>    'required|image',
      
        ]);

        $place = new Place;

        $place->name           = $request->input('name');
        $place->lat            = $request->input('lat');
        $place->lan            = $request->input('lan');
        $place->map_name       = $request->input('map_name');
        $place->discription    = $request->input('discription');
        $place->location       = $request->input('location');

        $image = new Image;

        $image->type           =  'place';
        $image->imagePath      =  Storage::putFile('images/places', $request->file('image'));
        $image->place_id       =  $place->id;
        
        $place->save();

        $place->images()->save($image);

        return "success";

    }


    
    public function show(Place $place)
    {

        $place->increment('viewCount');

        return new PlaceResource($place);

    }

   


   
    public function update(Request $request,  $id)
    {

        return $request;

        $this->validate($request, [

            'name'         =>    'required|unique:places|max:255',
            'lat'          =>    'required',
            'lan'          =>    'required',
            'map_name'     =>    'required',
            'discription'  =>    'required',
            'location'     =>    'required',
           // 'image'        =>    'required|image',
      
        ]);


        $place->name           = $request->input('name');
        $place->lat            = $request->input('lat');
        $place->lan            = $request->input('lan');
        $place->map_name       = $request->input('map_name');
        $place->discription    = $request->input('discription');
        $place->location       = $request->input('location');

        if ($request->hasFile('image')) {

            Storage::delete($place->image);

            $image = new Image;

            $image->type           =  'place';
            $image->imagePath      =  Storage::putFile('images/places', $request->file('image'));
            $image->place_id       =  $place->id;
 
        }

        
        $place->save();

        $place->images()->save($image);

        return "success";
    }



   
    public function destroy(Place $place)
    {

        Storage::delete($place->image);

        $place->delete();

        return "Successfuly Deleted ";
    }




    public function topPlaces()
    {
        return PlaceCollectionResource::collection(Place::orderBy('viewCount', 'desc')->limit(4)->get());
    }
}

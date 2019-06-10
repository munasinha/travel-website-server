<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImageController extends Controller
{

    public function index()
    {
        return Image::all()->where('type' ,'=', 'gallery');
    }



    public function store(Request $request)
    {
        if ($request->hasFile('image')) {

            $image = new Image;

            $image->type           =  'gallery';
            $image->imagePath      =  Storage::putFile('images/gallery', $request->file('image'));
            $image->place_id       =  0007;

            $image->save();
 
            return "success";
        }
    }


    public function show(Image $image)
    {
        //
    }



    public function update(Request $request, Image $image)
    {
        //
    }



    public function destroy(Image $image)
    {
        Storage::delete($image->imagePath);
        $image->delete();

        return "Successfuly Deleted ";
    }
}

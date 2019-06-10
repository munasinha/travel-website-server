<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class sendEmailController extends Controller
{
    function send(Request $request)
    {

        $this->validate($request, [

            'name'              =>      'required',
            'email'             =>      'required|email',
            'phoneNum'          =>      'required',
            'pickupDate'        =>      'required',
            'dropDate'          =>      'required',
            'pickupFrom'        =>      'required',
            'dropTo'            =>      'required',
            'numOfPassengers'   =>      'required',
            'numOfBaggegers'    =>      'required',
            'vehicleType'       =>      'required',

        ]);

        $data = array(

            'name'             =>      $request->name,
            'email'            =>      $request->email,
            'phoneNum'         =>      $request->phoneNum,
            'pickupDate'       =>      $request->pickupDate,
            'dropDate'         =>      $request->dropDate,
            'pickupFrom'       =>      $request->pickupFrom,
            'dropTo'           =>      $request->dropTo,
            'numOfPassengers'  =>      $request->numOfPassengers,
            'numOfBaggegers'   =>      $request->numOfBaggegers,
            'vehicleType'      =>      $request->vehicleType,
            'massage'          =>      $request->massage

        );

        Mail::to('jurneylankacabservice@gmail.com') ->send(new Email($data));

        return "success";
    }
}

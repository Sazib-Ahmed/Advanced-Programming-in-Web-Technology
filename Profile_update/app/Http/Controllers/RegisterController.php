<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{

    function register()
    {
        return view('register');
    }

    function registration(Request $request)
    {
        $this->validate($request,
        
        [
            'name'=>"required|regex:/^[a-z ,.'-]+$/i",
            'age'=>'required|integer',
            'mobile' => 'required|min:11|numeric',
            'address'=>"required",//|regex:\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\.
            'email'=>"required"
            //'image' => 'required|image'

        ],
        [
        'name.regex'=>'Please enter a valid name.',
         'age.integer'=>'Please enter a valid age.',
         'mobile.numeric'=>'Please enter a valid number.',
         'address.regex'=>'Please enter a valid address.',
        // 'image.image'=>'Please enter a valid file.'
        ]);


    $output="<h1>Submitted<h1>";

        $output.="Name: ".$request->name;
        $output.="Age: ".$request->age;
        $output.="Mobile: ".$request->mobile;
        $output.="Email: ".$request->email;
        //$output.="Image: ".$request->image;
        $output.="Address: ".$request->address;


    if(isset($error))
    {
        return $output;
    }
    else
    {
        $usetable=new UserModel();
        $usetable->name=$request->name;
        $usetable->age=$request->age;
        $usetable->mobile=$request->mobile;
        $usetable->email=$request->email;
        $usetable->address=$request->address;

        //$usetable->name=$request->image;
        $usetable->save();

        return view('/gotologin');
    }

        
    }

}

?>

<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{

    function profile()
    {
        return view('profile');
    }

    function update(Request $request)
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
        //$result=$usertable->where("name",$request->name)->where("email",$request->email)->first();
        $usetable= UserModel::where('id',session()->get('id'))->first();
        $usetable->name=$request->name;
        $usetable->age=$request->age;
        $usetable->mobile=$request->mobile;
        $usetable->email=$request->email;
        $usetable->address=$request->address;
        //$usetable->name=$request->image;
        if($usetable->save())
        {
            //$request->session()->put("id",$request->id);
            $request->session()->put("name",$request->name);
            $request->session()->put("age",$request->age);
            $request->session()->put("mobile",$request->mobile);
            $request->session()->put("address",$request->address);
            $request->session()->put("email",$request->email);
            session()->flash('status', 'Update was successful!');


            return view('profile');

        }
        
    }

        
    }

}

?>

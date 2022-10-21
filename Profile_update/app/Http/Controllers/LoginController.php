<?php

namespace App\Http\Controllers;


use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function login()
    {
        return view('login');
    }


    function checklogin(Request $request)
    {
       $usertable=new UserModel();
       //$result=DB::table('users')->where('name', "abc")->first();
       //echo $result; 
       $result=$usertable->where("name",$request->name)->where("email",$request->email)->first();
       //$result=$usertable->where("name","abc");
        
        if(!empty($result))
        {
            $request->session()->put("id",$result->id);
            $request->session()->put("name",$result->name);
            $request->session()->put("age",$result->age);
            $request->session()->put("mobile",$result->mobile);
            $request->session()->put("address",$result->address);
            $request->session()->put("email",$result->email);

            return view('profile')->with('name',$request->name);

        }
       else{
           $output="Wrong Info";
           return $output;
       }


    }
}

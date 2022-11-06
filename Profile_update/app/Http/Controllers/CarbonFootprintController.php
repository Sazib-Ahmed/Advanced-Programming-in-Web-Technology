<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectricityFootprints;
use App\Models\Guides; 

class CarbonFootprintController extends Controller
{
    //
    function getCarbonFootprint()
    {
        $Guides_data=Guides::all();

        return view('CarbonFootprint',['guides'=>$Guides_data]);
    }
    function getElectricity()
    {
        return view('ElectricityFootprint');
    }
    
    function getFood()
    {
        return view('FoodFootprint');
    }
    function getTravel()
    {
        return view('FoodFootprint');
    }
    function getHousehold()
    {
        return view('FoodFootprint');
    }


    function getElectricityCalculate(Request $request)
    {
        $this->validate($request,
        [
            'ef_division'=>"required",
            'ef_usages'=>'required|numeric|min:1|max:1000000000',

        ],
        [
            'ef_division.required'=>'Please select your Division',
            'ef_usages.required'=>'Please enter your Electricity usages in Units or KWh',
            'ef_usages.numeric'=>'Electricity usages must be numeric, Please enter a valid number',
            'ef_usages.max'=>'Please enter a value under 1,000,000,000',
            'ef_usages.min'=>'Please enter a value over 0',
        ]);


    if(isset($error))
    {
        $electricityerrors='Oops, Something went wrong.';
        return back()->with([ 'electricityerrors' => $electricityerrors ]);
    }
    else
    {

            $ef_carbonemission='';
            $ef_division=$request->ef_division;
            $ef_usages=$request->ef_usages;

        $electricityfootprints=new ElectricityFootprints();

        if($ef_division=='Dhaka')
        {
            $ef_carbonemission= 1.2*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }
        else if($ef_division=='Barishal')
        {
            $ef_carbonemission= 1.3*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }
        if($ef_division=='Chattogram')
        {
            $ef_carbonemission= 1.3*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }
        if($ef_division=='Khulna')
        {
            $ef_carbonemission= 1.1*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }
        if($ef_division=='Mymensingh')
        {
            $ef_carbonemission= 1.2*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }
        if($ef_division=='Rajshahi')
        {
            $ef_carbonemission= 1.4*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }
        if($ef_division=='Rangpur')
        {
            $ef_carbonemission= 1.5*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }
        if($ef_division=='Sylhet')
        {
            $ef_carbonemission= 1*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }
        else
        {
            $ef_carbonemission= 1.2*$ef_usages;
            $electricityfootprints->ef_carbonemission=$ef_carbonemission;
            $request->session()->put("ef_carbonemission",$ef_carbonemission);
        }

        $electricityfootprints->ef_usages=$request->ef_usages;
        $electricityfootprints->ef_division=$request->ef_division;
        $electricityfootprints->u_id=session()->get('u_id');


        $electricityfootprints->save();
        $electricityerrors='Your Carbon Emission from '.$ef_usages.' Units Electricity is: '.session()->get('ef_carbonemission').' Kg';
        return back()->with([ 'electricityerrors' => $electricityerrors ]);
    }
    
    }
}

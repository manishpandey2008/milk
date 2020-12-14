<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Create\Staff;
use App\Models\Model\Plant\MilkDispatch;
use App\Models\Model\Create\Vehicle;
use DB;
class StaffController extends Controller
{
    public function home($plantId,$id)
    {
    	$users=Registration::all()->where('user_id',$id);
    	$designation=Staff::all()->where('user_id',$id)->pluck('designation');
    	return view('staff.staffHome',[
    			'users'=>$users,
    			'user_id'=>$id,
    			'designation'=>$designation[0],
    			'plantId'=>$plantId,
    		]);
    }

    public function staffTransaction($plantId,$id)
    {	$users=Registration::all()->where('user_id',$id);
    	$designation=Staff::all()->where('user_id',$id)->pluck('designation');
    	return view('staff.staffTransaction',[
    			'users'=>$users,
    			'user_id'=>$id,
    			'designation'=>$designation[0],
    			'plantId'=>$plantId,
    		]);
    }


    public function vehicleDetails($plantId,$id)
    {	$users=Registration::all()->where('user_id',$id);
    	$designation=Staff::all()->where('user_id',$id)->pluck('designation');
        $dispatch_list=MilkDispatch::all()->where('vehicle_status','0');

    	return view('staff.vehicleData',[
    			'users'=>$users,
    			'user_id'=>$id,
    			'designation'=>$designation[0],
    			'plantId'=>$plantId,
                'dispatch_list'=>$dispatch_list,
    		]);
    }

    public function vConformation()
    {

        
        $dispid=request('data');

        $x=MilkDispatch::where('dispatch_id', $dispid)
        ->update(['vehicle_status' => '1']);
        if($x)
        {
            return "update data";
        }
    }


    public function Notification($plantId,$id)
    {	$users=Registration::all()->where('user_id',$id);
    	$designation=Staff::all()->where('user_id',$id)->pluck('designation');
    	return view('staff.staffNotifications',[
    			'users'=>$users,
    			'user_id'=>$id,
    			'designation'=>$designation[0],
    			'plantId'=>$plantId,
    		]);
    }

    public function staffProfile($plantId,$id)
    {	$users=Registration::all()->where('user_id',$id);
    	$designation=Staff::all()->where('user_id',$id)->pluck('designation');
    	return view('staff.staffProfile',[
    			'users'=>$users,
    			'user_id'=>$id,
    			'designation'=>$designation[0],
    			'plantId'=>$plantId,
    		]);
    }
}

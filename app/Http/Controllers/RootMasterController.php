<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Plant\RootMaster;
use App\Models\Model\Create\Vehicle;
class RootMasterController extends Controller
{
    public function rootMasterForm($id){

    	$users=Registration::all()->where('user_id',$id);
        $vehicle_list=Vehicle::all()->where('plant_id',$id)->pluck('vehicle_id');

    	return view('plant.rootMasterForm',[
    		'users'=>$users,
    		'user_id'=>$id,
            'vehicle_list'=>$vehicle_list,
    	]);


    }

    public function addRootMaster($id){
        $rootmaster= new RootMaster;
        $users=Registration::all()->where('user_id',$id);

        $count=RootMaster::all()->where('plant_id',$id)->count();
        $count=$count+1;
        
        $rootmaster->root_id='rootmaster'.$count;
        $rootmaster->plant_id=$id;

        $rootmaster->root_master_type=request('rootfor');
        $rootmaster->root_name=request('rootname');
        $rootmaster->root_expenses=request('rootExpenses');
        $rootmaster->vehicle_id=request('vehicleId');
        $rootmaster->root_length=request('rootLength');
        $rootmaster->shift_time=request('shift');

        $x=$rootmaster->save();
        if ($x){
            return redirect()->route('rootmasterlist',[
                                  'user_id'=>$id,
                                  'users'=>$users,
                                  'id'=>$id,
                                ]);
        }

    }

    public function rootMasterList($id){
    	$users=Registration::all()->where('user_id',$id)->first();
        $root_list=RootMaster::all()->where('plant_id',$id);
    	return view('plant.rootMasterList',[
    		'user'=>$users,
    		'user_id'=>$id,
            'root_list'=>$root_list,
    	]);
    }

    public function deleteRootMaster($id,$rootmasterid){

    }
}

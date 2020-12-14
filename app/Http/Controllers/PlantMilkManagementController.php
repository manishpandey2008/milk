<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Plant\MilkDispatch;
use DB;
class PlantMilkManagementController extends Controller
{
    public function milkCollection($id)
    {	
    	
        $dispatch_list=MilkDispatch::all()->where('vehicle_status','1')->where('collector_status','');

     	$users= Registration::all()->where('user_id',$id)->first();
    	return view('plant.milkCollectionNotification',[
    		'user'=>$users,
    		'user_id'=>$id,
    		'dispatch_list'=>$dispatch_list,
    	]);
    }

    public function collectionConformation()
    {
    	$dispId=request('data');
    	DB::table('milkdispatch')
       ->where('dispatch_id',$dispId)
       ->update(['collector_status'=>'yes']);
    }

    public function collectionGetEditData()
    {
        $dispId=request('data');
        $data=MilkDispatch::all()
            ->where('dispatch_id',$dispId);
        $weight=0;
        $snf=0;
        $rate=0;
        $clr=0;
        foreach ($data as $key) {
            $weight=$key['milk_weight'];
            $snf=$key['milk_snf'];
            $rate=$key['milk_rate'];
            $clr=$key['milk_clr'];
        }
        return([
            'weight'=>$weight,
            'clr'=>$clr,
            'snf'=>$snf,
            'rate'=>$rate,
        ]);

    }

    public function saveEditData()
    {
        $id=session('id_of_user');
       $dispId=request('dispatch_id');
       $new_weight=request('new_weight');
       $new_clr=request('new_clr');
       $new_snf=request('new_snf');
       $new_rate=request('new_rate');
       $msg=request('msg');

       $setUpdate= [
                 'new_milk_weight' => $new_weight,
                 'new_milk_clr'    => $new_clr,
                 'new_milk_snf'    => $new_snf,
                 'new_milk_rate'   => $new_rate,
                 'collector_msg'   => $msg,
                 'collector_status' => 'No',
               ];
       $x=DB::table('milkdispatch')
       ->where('dispatch_id',$dispId)
       ->update($setUpdate);

    return redirect()->route('plant.milk.collection',[
        'id'=>$id,
    ]);

    }

    public function collectionTable($id)
    {
        $collection_data=MilkDispatch::join('registration', 'milkdispatch.from_id', '=', 'registration.user_id')
            ->select('milkdispatch.dispatch_id','milkdispatch.from_id','milkdispatch.vehicle_id','milkdispatch.updated_at','milkdispatch.collector_status','milkdispatch.milk_weight','milkdispatch.milk_clr','milkdispatch.milk_snf','milkdispatch.milk_rate','milkdispatch.new_milk_weight','milkdispatch.new_milk_clr','milkdispatch.new_milk_snf','milkdispatch.new_milk_rate','milkdispatch.collector_msg')
            ->where('registration.plant_id',$id)
            ->get();
        $users= Registration::all()->where('user_id',$id)->first();
        return view('plant.milkCollectionTable',[
            'user'=>$users,
            'user_id'=>$id,
            'collection_data'=>$collection_data,
        ]);
    }

    public function collectionTableOldData()
    {
        $data=MilkDispatch::all()->where('dispatch_id',request('data'))->first();
        
        return $data;

    }
}

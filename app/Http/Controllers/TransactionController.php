<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Create\Society;
use App\Models\Model\Create\Farmer;
use App\Models\Model\Create\Staff;
use App\Models\Model\Create\Vehicle;
use App\Models\Model\Create\Vehicleowner;
use App\Models\Model\Plant\Plantproducts;
use App\Models\Model\Society\Orderdetails;
use App\Models\Model\Transactiondetails;

class TransactionController extends Controller
{
    public function NewTransactionForm($id)
    {
   		$users=Registration::all()->where('user_id',$id)->first();
   		$toList=Registration::all()->where('plant_id',$id);
   		return view('plant.newTransaction',[
   			'user'=>$users,
   			'to_list'=>$toList,
   			'msg'=>'0',
   		]);
    }

    public function AddTransaction($id)
    {
    	$trData=new Transactiondetails;

    	$toId=request('toId');
    	$trData->plant_id=$id;

    	$count=Transactiondetails::all()->count();
    	$trData->transaction_id='tr'.($count+1);
    	$trData->transaction_from='plant';
    	$trData->transaction_from_id=$id;
    	$trData->transaction_to=request('toRole');
    	$trData->transaction_to_id=request('toId');
    	$trData->transaction_amount=request('transactionAmount');
    	$trData->transaction_msg=request('transactionMessage');
    	$trData->transaction_type=request('transactionType');


    	$x=$trData->save();

    	$users=Registration::all()->where('user_id',$id)->first();
	   	$toList=Registration::all()->where('plant_id',$id);
    	if($x){
	   		return view('plant.newTransaction',[
	   			'user'=>$users,
	   			'to_list'=>$toList,
	   			'msg'=>'1',
	   			'type'=>'yes',
	   		]);
    	}
    	return view('plant.newTransaction',[
	   			'user'=>$users,
	   			'to_list'=>$toList,
	   			'msg'=>'1',
	   			'type'=>'no',
	   		]);

    }

    public function GetUserData()
    {
    	$userId=request('data');
    	$user=Registration::all()->where('user_id',$userId)->first();
    	$name=$user['first_name'].' '.$user['mid_name'].' '.$user['last_name'];
    	$role=$user['working_role'];

    	return ['name'=>$name,'role'=>$role];

    }

    public function AllTransactionList($id)
    {
    	$users=Registration::all()->where('user_id',$id)->first();
   		$trFromList=Transactiondetails::all()->where('transaction_from_id',$id);
   		$trToList=Transactiondetails::all()->where('transaction_to_id',$id);
   		return view('plant.transactionList',[
   			'user'=>$users,
   			'trFromList'=>$trFromList,
   			'trToList'=>$trToList,
   		]);
    }
}

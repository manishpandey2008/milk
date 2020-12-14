<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use DB;
class IndexController extends Controller
{
    public function index(){
    	return view('index.index');
    }

    public function about(){

    }

    public function contact(){

    }


    public function login(){

    	return view('index.login',[
            'error'=>0,
        ]);
    }

    public function loginVerification(Request $request){

    		$user=Registration::all()->where('user_id',request('userid'))->where('password',request('password'))->where('working_role',request('work_role'))->count();
            $work_role=request('work_role');
            
            if($user){

              session(['role_of_work' => request('work_role')]);
              session(['id_of_user' => request('userid')]);
             //session()->get('role_of_work', 'working_role');
              $x=request('userid');

                if($work_role=='plant')
                {
                    return redirect()->route('plant.home',['id'=>$x]);
                }
                else if($work_role=='society'){

                    return redirect()->route('society.home',['id'=>$x]);
                }
                else if($work_role=='farmer')
                {
                    
                    return redirect()->route('farmer.home',['id'=>$x]);
                }
                else if($work_role=='staff')
                {
                    $plantId=Registration::all()->where('user_id',$x)->pluck('plant_id');
                    return redirect()->route('staff.home',['plantId'=>$plantId[0],'id'=>$x]);
                }
                else if($work_role=='bmc'){
                    return "bmc";
                }
            }
            else{

                $s="Somthing is Error";
                return view("index.login",[
                    'error'=>$s
                ]);
            }


    		return $user;
    }

}

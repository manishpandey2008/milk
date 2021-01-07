<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use DB;
use Validator;
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
            $rules=[
                'userid'=>'required|max:10',
                'password'=>'required'
                ];

            $validator=Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return response()->json( $validator->errors(),400);
            }

    		$user=Registration::all()->where('user_id',request('userid'))->where('password',request('password'));

            if($user->count()){
              $work_role=$user->first()->working_role;
              session(['role_of_work' => $work_role]);
              session(['id_of_user' => request('userid')]);
              DB::table('registration')->where('user_id',request('userid'))->update(['login_status'=>'1']);
              $id=request('userid');

                if($work_role=='plant')
                {
                    return redirect()->route('plant.home');
                }
                else if($work_role=='society'){

                    return redirect()->route('society.home');
                }
                else if($work_role=='farmer')
                {
                    return redirect()->route('farmer.home');
                }
                else if($work_role=='staff')
                {
                    $user_id=
                    $plantId=Registration::all()->where('user_id',$x)->pluck('plant_id');
                    return redirect()->route('staff.home',['plantId'=>$plantId[0],'id'=>$x]);
                }
                else if($work_role=='outlet')
                {
                    $user=Registration::all()->where('user_id',request('userid'))->first();
                    $x=$user['id'];
                    return redirect()->route('outlet_home',['id'=>$x]);
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

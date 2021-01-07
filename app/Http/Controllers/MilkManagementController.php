<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Create\Society;
use App\Models\Model\Create\Farmer;
use App\Models\Model\Create\Staff;
use App\Models\Model\Create\Vehicle;
use App\Models\Model\Create\Vehicleowner;
use App\Models\Model\Society\Farmermilkcollection;
use App\Models\Model\Plant\MilkDispatch;
use Illuminate\Support\Facades\App;
use App\Models\Test;
use Validator;
class MilkManagementController extends Controller
{
    public function milkCollectionForm(Request $request)
    {
    	  $id=session('id_of_user');
        $role=session('role_of_work');
    		$users=Registration::all()->where('user_id',$id)->first();
    		$farmer_list=Farmer::all()->where('society_id',$id)->pluck('user_id');
    		return view('society.newMilkCollection',[
    			'user'=>$users,
    			'user_id'=>$id,
    			'farmer_list'=>$farmer_list,
    		]);
    	
    }

     public function milkCollectionTable(Request $request)
    {
      $id=session('id_of_user');
      $users=Registration::all()->where('user_id',$id)->first();
      $collection_data=Farmermilkcollection::all()->where('society_id',$id);
        return view('society.milkCollectionTable',[
          'user'=>$users,
          'user_id'=>$id,
          'collection_data'=>$collection_data,
        ]);
    }

   public function getFarmerData()
    {
    	$farmer_id=request('farmer_id');

    	$farmer_list=Registration::join('farmerdetails', 'registration.user_id', '=', 'farmerdetails.user_id')
          ->select('registration.user_id','registration.first_name','registration.mid_name','registration.last_name','registration.phone_number','farmerdetails.father_name_eng',)
        	->where('farmerdetails.user_id',$farmer_id)
          ->where('registration.user_id',$farmer_id)
          ->get();


     if ($farmer_list->count()) {

            $name= $farmer_list[0]['first_name'].' '.$farmer_list[0]['mid_name'].' '.$farmer_list[0]['last_name'];

            $htmlfile='
                <div class="row">
                  <div class="col-lg-4 col-sm-10  my-2 form-group">
                    <input type="text" name="farmerVame"  readonly="" class="form-control" value="'.$name.'" id="farmerVame">
                  </div>
                  <div class="col-lg-4 col-sm-10  my-2 form-group">
                    <input type="text" name="farmerId" readonly="" class="form-control" value="'.$farmer_list[0]["user_id"].'" id="farmerId" required="">
                  </div>
                  <div class="col-lg-4 col-sm-10  my-2 form-group">
                    <input type="text" name="fatherName" readonly="" class="form-control" value="'.$farmer_list[0]["father_name_eng"].'" id="fatherName" required="">
                  </div>
                  <div class="col-lg-4 col-sm-10  my-2 form-group">
                    <label>SNF Value </label>
                    <input type="text" name="snfVal" placeholder="Enter Milk SNF" class="form-control" id="snfval" required="" pattern="[0-9]+([\.][0-9]+)?" step="0.01">
                  </div>
                  <div class="col-lg-4 col-sm-10  my-2 form-group">
                    <label>CLR Value</label>
                    <input type="text" name="cnfVal" placeholder="Enter Milk CLR" class="form-control" id="clrval" required="" pattern="[0-9]+([\.][0-9]+)?" step="0.01">
                  </div>
                  <div class="col-lg-4 col-sm-10  my-2 form-group">
                    <label>Fat</label>
                    <input type="text" name="rate" placeholder="Enter Milk Rate" class="form-control"  id="rate" pattern="[0-9]+([\.][0-9]+)?" step="0.01" value=0>
                  </div>
                  <div class="col-lg-4 col-sm-10  my-2 form-group">
                    <label>Weight</label>
                    <input type="text" name="milkWeight" placeholder="Enter Milk Weight"  class="form-control" id="weight" required=""  pattern="[0-9]+([\.][0-9]+)?" step="0.01">
                  </div>
                  <div class="col-12  my-2 form-group">
                    <button class="btn btn-primary " id="savedata">Add Milk</button>
                  </div>
                </div>
            ';


              return $htmlfile;
     }
         
     return "wrong Entery";
    	
    
    }

    public function storeMilkData(Request $request){
      $obj=request('data');


      $society_id=session('id_of_user');
      $milk_collection=new Farmermilkcollection;

      $count=Farmermilkcollection::all()->count();
      
      $milk_collection->collectionId='fmc'.($count+1);
      $milk_collection->society_id=$society_id;
      $milk_collection->user_id=$obj['farmerId'];
      $milk_collection->milk_snf=$obj['snf'];
      $milk_collection->milk_clr=$obj['clr'];
      $milk_collection->milk_rate=$obj['rate'];
      $milk_collection->milk_weight=$obj['weight'];

      $milk_collection->milk_price='200';
      $milk_collection->farmer_status='0';

      $x=$milk_collection->save();


    }

/////---------------------------------dispatch-------------------///// 
    public function milkDispatchForm(Request $request){
      $id=session('id_of_user');
      $users=Registration::all()->where('user_id',$id)->first();
      $vehicle=Society::join('vehicle', 'societydetails.vehicle_id', '=', 'vehicle.vehicle_id')
          ->select('vehicle.vehicle_number','vehicle.vehicle_id')
          ->where('societydetails.user_id',$id)
          ->get();
      return view('society.milkDispatch',[
          'user'=>$users,
          'user_id'=>$id,
          'vehicle'=>$vehicle[0],
        ]);
    }

    public function milkDispatch(Request $request){
       $rules=[
                'socirtyId'=>'required|max:20',
                'vehicleId'=>'required|max:20',
                'vehicleNumber'=>'required|max:30',
                'milkWeight'=>'required|max:30',
                'milkClr'=>'required|max:10',
                'milkSnf'=>'required|max:10',
                'milkFate'=>'max:10',
                ];

        $validator=Validator::make($request->all(),$rules);
          if ($validator->fails()) {
            return response()->json( $validator->errors(),400);
        }

      $id=session('id_of_user');
      $role=session('role_of_work');

      $milkdispatch=new MilkDispatch;
      $count=MilkDispatch::all()->count();
      $milkdispatch->dispatch_id='md'.($count+1);

      $milkdispatch->from_role=$role;
      $milkdispatch->from_id=$id;
      $milkdispatch->vehicle_id=request('vehicleId');
      $milkdispatch->vehicle_no=request('vehicleNumber');
      $milkdispatch->milk_weight=request('milkWeight');
      $milkdispatch->milk_clr=request('milkClr');
      $milkdispatch->milk_snf=request('milkSnf');
      $milkdispatch->milk_rate=request('milkFate');
      $milkdispatch->vehicle_status='0';
      $milkdispatch->collector_role='plant';
      $milkdispatch->collector_id='plant001';

      $milkdispatch->save();

       return redirect()->route('milkdispatchlist');
    }


    public function milkDispatchList(Request $request){
        $id=session('id_of_user');
        $role=session('role_of_work');

         $users=Registration::all()->where('user_id',$id)->first();
         $dispatch_list=MilkDispatch::all()->where('from_id',$id)->where('vehicle_status','1');
        return view('society.milkDispatchTable',[
          'user'=>$users,
          'user_id'=>$id,
          'dispatch_list'=>$dispatch_list,
        ]);
    }

    public function plantFinalData()
    {
      $dispId=request('data');

     
      $data=MilkDispatch::all()
            ->where('dispatch_id',$dispId)->first();
      return $data;
    }
//---------------------INVOICE-------------------------------------//
    public function DownloadVehicleInvoice($id,$vehicleId,$dispatchId)
    {
        $user=Registration::all()->where('user_id',$id)->first();
        $vehicle=Vehicle::all()->where('vehicle_id',$vehicleId)->first();
        $disp_data=MilkDispatch::all()->where('dispatch_id',$dispatchId)->first();

        $disp_date=explode(' ',$disp_data['updated_at'])[0];
        $disp_time=explode(':',explode(' ',$disp_data['updated_at'])[1])[0];
        $shift="Morning";
        if ($disp_time>=14) {
            $shift="Evening";
        }
       $pdf = App::make('dompdf.wrapper');
                   $x='
                   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                   <div class="my-2 container">
                    <h4 class="text-center pt-2"><strong>'.$vehicleId.'</strong></h4>
                    <p class="text-center">'.$vehicle["vehicle_number"].'</p>
                    <div style="width: 100%;height: 2px;background-color: black;" class="ty-5"></div>
                    <p class="float-left mx-2"><strong>Date:</strong> '. date("Y/m/d").'</p>
                    <p class="float-right mx-2"><strong>Time:</strong> '. date("h:i:sa").'</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <p class="border text-center mt-5" style="background-color: beige;"><strong>FOR</strong></p>
                            <p>
                                '. strtoupper($user["first_name"]." ".$user["mid_name"]." ".$user["last_name"]) .'<br>
                               '.$user["user_id"].'<br>
                                '. $user["phone_number"].'
                            </p>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-12">
                            <p ><strong>Dispatch Date:</strong>'.$disp_date.'
                            <span class="float-right"><strong>Shift:</strong>'.$shift.'</span></p>
                            
                        </div>
                    </div>

                    <div class="my-1 row">
                        <div class="col-12">
                            <table class="table text-center table-bordered">
                                <thead style="background-color: bisque;">
                                    <tr>
                                        <th>ID</th>
                                        <th>Waight</th>
                                        <th>SNF</th>
                                        <th>CLR</th>
                                        <th>Fat</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>'.$disp_data['dispatch_id'].'</td>
                                        <td>'.$disp_data['milk_weight'].'</td>
                                        <td>'.$disp_data['milk_snf'].'</td> 
                                        <td>'.$disp_data['milk_clr'].'</td> 
                                        <td>'.$disp_data['milk_rate'].'</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        </div>

                </div>';
                   $pdf->loadHTML($x);
                return $pdf->download('vehicle_invoice.pdf');
    }

    public function DownloadCollecterInvoice($id,$collecterId,$dispatchId)
    {
        $user_data=Registration::all()->where('user_id',$id)->first();
        $collecter_data=Registration::all()->where('user_id',$collecterId)->first();
        $dispatch_data=MilkDispatch::all()->where('dispatch_id',$dispatchId)->first();

        $disp_date=explode(' ',$dispatch_data['updated_at'])[0];
        $disp_time=explode(':',explode(' ',$dispatch_data['updated_at'])[1])[0];
        $shift="Morning";
        if ($disp_time>=14) {
            $shift="Evening";
        }
       $w=0;
       $c=0;
       $s=0;
       $f=0;
       $p=0;
        if($dispatch_data['collector_status']=='yes')
        {
            $w=$dispatch_data['milk_weight'];
            $c=$dispatch_data['milk_clr'];
            $s=$dispatch_data['milk_snf']; 
            $f=$dispatch_data['milk_rate'];
            $p=5000;
        }
        else if($dispatch_data['collector_status']=='No')
        {
            $w=$dispatch_data['new_milk_weight'];
            $c=$dispatch_data['new_milk_clr'];
            $s=$dispatch_data['new_milk_snf']; 
            $f=$dispatch_data['new_milk_rate'];
            $p=4000;
        }

      
       $pdf = App::make('dompdf.wrapper');
                   $x='
                   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                   <div class="my-2 container">
                    <h4 class="text-center pt-2"><strong>'.$collecterId.'</strong></h4>
                    <p class="text-center">'.$collecter_data["phone_number"].'</p>
                    <div style="width: 100%;height: 2px;background-color: black;" class="ty-5"></div>
                    <p class="float-left mx-2"><strong>Date:</strong> '. date("Y/m/d").'</p>
                    <p class="float-right mx-2"><strong>Time:</strong> '. date("h:i:sa").'</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <p class="border text-center mt-5" style="background-color: beige;"><strong>FOR</strong></p>
                            <p>
                                '. strtoupper($user_data["first_name"]." ".$user_data["mid_name"]." ".$user_data["last_name"]) .'<br>
                               '.$user_data["user_id"].'<br>
                                '. $user_data["phone_number"].'
                            </p>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-12">
                            <p ><strong>Dispatch Date:</strong>'.$disp_date.'
                            <span class="float-right"><strong>Shift:</strong>'.$shift.'</span></p>
                            
                        </div>
                    </div>

                    <div class="my-1 row">
                        <div class="col-12">
                            <table class="table text-center table-bordered">
                                <thead style="background-color: bisque;">
                                    <tr>
                                        <th>ID</th>
                                        <th>Waight</th>
                                        <th>SNF</th>
                                        <th>CLR</th>
                                        <th>Fat</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>'.$dispatch_data['dispatch_id'].'</td>
                                        <td>'.$w.'</td>
                                        <td>'.$s.'</td> 
                                        <td>'.$c.'</td> 
                                        <td>'.$f.'</td>
                                        <td>'.$p.'</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        </div>

                </div>';
                   $pdf->loadHTML($x);
                return $pdf->download('vehicle_invoice.pdf');
    }
    //---------------------INVOICE-------------------------------------//
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registration;
use App\Models\Model\Create\Society;
use App\Models\Model\Create\Farmer;
use App\Models\Model\Create\Staff;
use App\Models\Model\Create\Vehicle;
use App\Models\Model\Create\Outletdetails;
use App\Models\Model\Create\Vehicleowner;
use App\Models\Test;
use DataTables;
use DB;
use Validator;
class PlantController extends Controller
{
     public function home(){

     	$work_role=session('role_of_work');
     	$id_of_user=session('id_of_user');
     	$users=Registration::all()->where('user_id',$id_of_user);

     	return view('plant.plantHome',[
     		'users'=>$users,
     	]);
     }

     public function registration($create_role){
     	$work_role=session('role_of_work');
     	$id=session('id_of_user');
     	$users=Registration::all()->where('user_id',$id);
     
     	return view('registration',[
     		'user_id'=>$id,
     		'users'=>$users,
     		'create_role'=>$create_role,
               'error'=>0,
     	]);
     }
     public function Otpverification(Request $request,$create_role){
      $rules=[
                'role'=>'required|max:20',
                'first_name'=>'required|max:30',
                'last_name'=>'required|max:30',
                'phone_number'=>'required|max:10',
                'password'=>'required',
                're_password'=>'required',
                'photo'=>'required|mimes:jpeg,bmp,png|max:4000',
                ];

      $validator=Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json( $validator->errors(),400);
      }

      if ($request->hasfile('photo')) {
            $file=$request->file('photo');
            $extention=$file->getClientOriginalExtension();
            $fileName=time().'.'.$extention;
            $file->move('storage/user_image/',$fileName);
        }

     
      $id=session('id_of_user');

     	$user=new Registration;

      $count=Registration::all()->count();
      $count=$count+1;

      $user->user_id='00'.$count;
      $user->remember_token=request('_token');
     	$user->plant_id=$id;	
     	$user->creater_user_id=$id;
     	$user->working_role=$create_role;
     	$user->first_name=request('first_name');
     	$user->mid_name=request('mid_name');
     	$user->last_name=request('last_name');

      $test_phone=Registration::where('phone_number',request('phone_number'))->count();
      if ($test_phone) {
        $error="This Phone Number Registerd";
        $users=Registration::all()->where('user_id',$id);
        return view('registration',[
          'user_id'=>$id,
          'users'=>$users,
          'create_role'=>$create_role,
          'error'=>$error,
          ]);
          }
      $user->phone_number=request('phone_number');
     	$user->user_otp='1234';
     	$user->otp_conformation_status='0';
     	$user->email=request('email');
     	$user->user_photo=$fileName;
     	$user->password=request('password');
      $user->active_status='1';
      $user->login_status='0';
     	$user->details_status='0';

     	$user->save();

          session(['create_work_role' => $create_role]);
          session(['create_user_id' => $user->user_id]);

          $users=Registration::all()->where('user_id',$id);

          return view('otpverification',[
               'users'=>$users,
               'create_role'=>$create_role,
               'user_id'=>$id,
               'error'=>0,
          ]);

     }


     public function details($create_role){

          $id=session('id_of_user');

          $users=Registration::all()->where('user_id',$id);

          $create_user_id=session('create_user_id');

          $otp=Registration::all()->where('user_id',$create_user_id)->where('user_otp',request('otp'))->count();

          ////// FoR bmc
          $dropDownList=Registration::all()->where('creater_user_id',$id);

          if($create_role=="farmer")
          {
              $village_list=Farmer::all()->pluck('village_name');
               if($otp)
               {
                    return view('create.farmerdetails',[
                    'users'=>$users,
                    'create_role'=>$create_role,
                    'user_id'=>$id,
                    'create_user_id'=>$create_user_id,
                    'dropDownList'=>$dropDownList,
                    'village_list'=>$village_list,
                    ]);
               }
               else{
                    $error="Enter Otp Is Wrong";
                    return view('otpverification',[
                         'users'=>$users,
                         'create_role'=>$create_role,
                         'user_id'=>$id,
                         'error'=>$error,
                    ]);

               }
          }
          else if($create_role=="society")
          {
              $village_list=Society::all()->pluck('village_name');
               if($otp)
               {
                $vehicle_id=Vehicle::all()->pluck('vehicle_id');
                    return view('create.societydetails',[
                    'users'=>$users,
                    'create_role'=>$create_role,
                    'user_id'=>$id,
                    'create_user_id'=>$create_user_id,
                    'village_list'=>$village_list,
                    'vehicle_id'=>$vehicle_id,
                    ]);
               }
               else{

                    $error="Enter Otp Is Wrong";
                    return view('otpverification',[
                         'users'=>$users,
                         'create_role'=>$create_role,
                         'user_id'=>$id,
                         'error'=>$error,
                    ]);

               }
              
          }
          else if($create_role=="staff")
          {
            $village_list=Staff::all()->pluck('village_name');
                if($otp)
               {
                    return view('create.staffdetails',[
                    'users'=>$users,
                    'create_role'=>$create_role,
                    'user_id'=>$id,
                    'create_user_id'=>$create_user_id,
                    'village_list'=>$village_list,
                    ]);
               }
               else{
                    $error="Enter Otp Is Wrong";
                    return view('otpverification',[
                         'users'=>$users,
                         'create_role'=>$create_role,
                         'user_id'=>$id,
                         'error'=>$error,
                    ]);

               }
          }
          else if($create_role=="outlet")
          {
            $village_list=Staff::all()->pluck('village_name');
              if($otp)
               {
                $vehicle_id=Vehicle::all()->pluck('vehicle_id');
                    return view('create.outletDetails',[
                    'users'=>$users,
                    'create_role'=>$create_role,
                    'user_id'=>$id,
                    'create_user_id'=>$create_user_id,
                    'village_list'=>$village_list,
                    ]);
               }
               else{

                    $error="Enter Otp Is Wrong";
                    return view('otpverification',[
                         'users'=>$users,
                         'create_role'=>$create_role,
                         'user_id'=>$id,
                         'error'=>$error,
                    ]);

               }
          }
          else if($create_role=="vehicle_owner")
          {
             $drivere_list=Staff::all()->where('designation','driver')->pluck('user_id');
                return view('create.publicvehicledetails',[
                         'create_role'=>$create_role,
                         'user_id'=>$id,
                         'error'=>0,
                         'create_user_id'=>$create_user_id,
                         'users'=>$users,
                         'drivere_list'=>$drivere_list,
                ]);
          }
     }

     public function sendDetails(Request $request,$create_role){
         $id=session('create_user_id');
         $plant_id=session('id_of_user');

          if($create_role=="society")
          {
            $rules=[
                'plant_id'=>'required|max:20',
                'bmc_id'=>'required|max:20',
                'society_id'=>'required|max:20',
                'vehicle_id'=>'required|max:20',
                'society_system_type'=>'required|max:50',
                'society_name'=>'required|max:50',
                'name_in_hindi'=>'max:50',
                'father_name'=>'required|max:50',
                'father_name_hindi'=>'max:50',
                'vill_name'=>'max:50',
                'new_village'=>'max:50',
                'full_address'=>'required',
                'pin_code'=>'required|max:6',
                'gender_name'=>'required|max:10',
                'dob'=>'required|max:20',
                'anniversaryDate'=>'max:20',
                'emergencyContactNumber'=>'max:10',
                'bloodGroup'=>'max:10',
                'open_bal_type'=>'required|max:10',
                'opening_amount'=>'required|max:10',

                'payee_name'=>'required|max:50',
                'bank_name'=>'required|max:50',
                'act_name'=>'required|max:20',
                'ifsc_code'=>'required|max:20',
                'aadhar_number'=>'required|max:20',
                'aadhar_doc'=>'required|mimes:jpeg,bmp,png,pdf|max:4000',

                'society_type'=>'required|max:30',
                'payment_type'=>'required|max:30',
                'supervisior'=>'required|max:20',
                'commission_type'=>'required|max:30',
                'commission_val'=>'required|max:10',
                ];

          $validator=Validator::make($request->all(),$rules);
          if ($validator->fails()) {
            return response()->json( $validator->errors(),400);
          }

          if ($request->hasfile('aadhar_doc')) {
            $file=$request->file('aadhar_doc');
            $extention=$file->getClientOriginalExtension();
            $aadharName='aa'.time().'.'.$extention;
            $file->move('storage/documents/',$aadharName);
          }
               $society=new Society;

               $bmc_id=request('bmc_id');
               if($bmc_id !='none')
               {
                 Registration::where('user_id',$id)->update(['bmc_id'=>$bmc_id]);
               }
               $society->user_id=$id;
               $society->plant_id=$plant_id;
               $society->vehicle_id=request('vehicle_id');
               $society->society_system_type=request('society_system_type');
               $society->society_name=request('society_name');
               $society->name_hin=request('name_in_hindi');
               $society->father_name_eng=request('father_name');
               $society->father_name_hin=request('father_name_hindi');

               $village_name=request('village');
               $new_village_name=request('new_village');

               if($village_name !='0'){
                    $society->village_name=$village_name;
               }else{
                    $society->village_name=$new_village_name;
               }

               $society->address=request('full_address');
               $society->pin_code=request('pin_code');
               $society->gender=request('gender_name');
               $society->dob=request('dob');
               $society->anniversary_date=request('anniversaryDate');
               $society->emergency_contact_number=request('emergencyContactNumber');
               $society->blood_group=request('bloodGroup');
               $society->opening_balance_type=request('open_bal_type');
               $society->opening_amount=request('opening_amount');

               $society->payee_name=request('payee_name');
               $society->bank_name=request('bank_name');
               $society->account_number=request('act_name');
               $society->ifsc_code=request('ifsc_code');
               $society->aadhar_number=request('aadhar_number');
               $society->aadhar_card_doc=$aadharName;
               $society->society_type=request('society_type');
               $society->payment_type=request('payment_type');
               $society->root_supervisor=request('supervisior');
               $society->commission_type=request('commission_type');
               $society->commission_amount=request('commission_val');

               $x=$society->save();

               if($x){
                    Registration::where('user_id',$id)->update(['details_status'=>'1']);

                    return redirect()->route('memberlist');
               }


          }


          else if ($create_role=="farmer") {

            $rules=[
                'userId'=>'required|max:20',
                'plantId'=>'required|max:20',
                'bmc_id'=>'max:20',
                'societyId'=>'required|max:20',
                'chartCategory'=>'required|max:30',
                'nameInHindi'=>'max:50',
                'fatherName'=>'required|max:50',
                'fatherNameInHindi'=>'max:50',
                'villageName'=>'max:50',
                'fullAddress'=>'required',
                'pinCode'=>'required|max:6',
                'gender'=>'max:30',
                'dob'=>'required|max:20',
                'emergencyContactNumber'=>'max:10',
                'bloodGroup'=>'max:5',
                'anniversaryDate'=>'max:20',
                'openingBalanceType'=>'required|max:20',
                'openingAmount'=>'required|max:10',

                'payeeName'=>'required|max:50',
                'bankName'=>'required|max:50',
                'actNumber'=>'required|max:20',
                'ifscNumber'=>'required|max:20',
                'aadharNumber'=>'required|max:12',
                'aadharDoc'=>'required|mimes:jpeg,bmp,png,pdf|max:4000',
                ];

        $validator=Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json( $validator->errors(),400);
        }
            
        if ($request->hasfile('aadharDoc')) {
            $file=$request->file('aadharDoc');
            $extention=$file->getClientOriginalExtension();
            $fileName='aa'.time().'.'.$extention;
            $file->move('storage/documents/',$fileName);
        }

             $farmer=new Farmer;

             $farmer->user_id=$id;
             $farmer->plant_id=$plant_id;
             $farmer->bmc_id=request('bmc_id');
             $farmer->society_id=request('societyId');
             $bmcId=request('bmc_id');
             $societyId=request('societyId');
             Registration::where('user_id',$id)->update(['society_id'=>$societyId]);
             Registration::where('user_id',$id)->update(['bmc_id'=>$bmcId]);

             $farmer->selected_chart_code=request('chartCategory');
           
             $farmer->father_name_eng=request('fatherName');
             $farmer->father_name_hin=request('fatherNameInHindi');
             
             $village_name=request('villageName');
             $newVillageName=request('newVillageName');
             if($village_name !='none'){
                    $farmer->village_name=$village_name;
               }else{
                    $farmer->village_name=$newVillageName;
               }
             
             $farmer->address=request('fullAddress');
             $farmer->pin_code=request('pinCode');
             $farmer->gender=request('gender');
             $farmer->dob=request('dob');
             $farmer->anniversary_date=request('anniversaryDate');
             $farmer->emergency_contact_number=request('emergencyContactNumber');
             $farmer->blood_group=request('bloodGroup');
             $farmer->opening_balance_type=request('openingBalanceType');
             $farmer->opening_amount=request('openingAmount');
             
             $farmer->payee_name=request('payeeName');
             $farmer->bank_name=request('bankName');
             $farmer->account_number=request('actNumber');
             $farmer->ifsc_code=request('ifscNumber');
             $farmer->aadhar_number=request('aadharNumber');
             $farmer->aadhar_card_doc=$fileName;
             $farmer->remember_token=request('_token');
            

              $x=$farmer->save();

               if($x){
                    Registration::where('user_id',$id)->update(['details_status'=>'1']);
                return redirect()->route('memberlist');
               }
          }

          else if ($create_role=="staff") {
            $rules=[
                'createId'=>'required|max:20',
                'plantId'=>'required|max:20',
                'fatherNameInEnglish'=>'required|max:50',
                'dob'=>'required|max:20',
                'gender'=>'required|max:20',
                'village'=>'required|max:50',
                'address'=>'required|max:30',
                'pinCode'=>'required|max:6',
                'openBalType'=>'required|max:10',
                'openingAmount'=>'required|max:10',
                'designation'=>'required|max:50',
                'department'=>'required|max:50',

                'aadharNumber'=>'required|max:12',
                'aadharDoc'=>'required|mimes:jpeg,bmp,png,pdf|max:4000',
                'panNumber'=>'max:30',
                'panDoc'=>'mimes:jpeg,bmp,png,pdf|max:4000',
                'drivingLicenceNumber'=>'max:30',
                'drivingLicenceDoc'=>'mimes:jpeg,bmp,png,pdf|max:4000',
                'medicalCft'=>'mimes:jpeg,bmp,png,pdf|max:4000',
                'payeeName'=>'required|max:50',
                'bankName'=>'required|max:50',
                'actNumber'=>'required|max:20',
                'ifscNumber'=>'required|max:20',

                ];

          $validator=Validator::make($request->all(),$rules);
          if ($validator->fails()) {
            return response()->json( $validator->errors(),400);
          }

          if ($request->hasfile('aadharDoc')) {
            $file=$request->file('aadharDoc');
            $extention=$file->getClientOriginalExtension();
            $aadharName='aa'.time().'.'.$extention;
            $file->move('storage/documents/',$aadharName);
          }
          if ($request->hasfile('panDoc')) {
            $file=$request->file('panDoc');
            $extention=$file->getClientOriginalExtension();
            $panName='pan'.time().'.'.$extention;
            $file->move('storage/documents/',$panName);
          }
        if ($request->hasfile('drivingLicenceDoc')) {
            $file=$request->file('drivingLicenceDoc');
            $extention=$file->getClientOriginalExtension();
            $driveName='dl'.time().'.'.$extention;
            $file->move('storage/documents/',$driveName);
        }
        if ($request->hasfile('medicalCft')) {
            $file=$request->file('medicalCft');
            $extention=$file->getClientOriginalExtension();
            $mediName='med'.time().'.'.$extention;
            $file->move('storage/documents/',$mediName);
        }

             $staff=new Staff;

             $staff->user_id=request('createId');
             $staff->plant_id=request('plantId');
             $staff->name_in_hindi=request('nameHindi');
             $staff->father_name_eng=request('fatherNameInEnglish');
             $staff->father_name_hin=request('fatherNameInHindi');
             $staff->gender=request('gender');
             $staff->dob=request('dob');
             $staff->anniversary_date=request('anniversaryDate');
             $staff->emergency_contact_number=request('emergencyphone');
             $staff->blood_group=request('bloodGroup');


             $village=request('village');
             $staff->village_name=request('newVillage');


             $staff->address=request('address');
             $staff->pin_code=request('pinCode');
             $staff->opening_balance_type=request('openBalType');
             $staff->opening_amount=request('openingAmount');

             $staff->designation=request('designation');
             $staff->department=request('department');
             $staff->working_days_in_week=implode(" ",request('days'));

             $staff->aadhar_number=request('aadharNumber');
             $staff->aadhar_card_doc=$aadharName;
             $staff->pan_card_number=request('panNumber');
             $staff->pan_card_doc=$panName;
             $staff->driver_licence_number=request('drivingLicenceNumber');
             $staff->driver_licence_doc=$driveName;
             $staff->driver_licence_issue_date=request('licenceIssueDate');
             $staff->driver_licence_expiry_date=request('licenceExpiryDate');
             $staff->medical_certificate=$mediName;

             $staff->payee_name=request('payeeName');
             $staff->bank_name=request('bankName');
             $staff->account_number=request('actNumber');
             $staff->ifsc_code=request('ifscNumber');
             $x=$staff->save();
            


               if($x){
                    Registration::where('user_id',$id)->update(['details_status'=>'1']);
                return redirect()->route('memberlist');
               }
           
          }

      else if ($create_role=="vehicle_owner"){
         $drivere_list=Staff::all()->where('designation','driver')->pluck('user_id');
          $users=Registration::all()->where('user_id',$plant_id);

              $vehicle=new Vehicle;
              $vehicleowner=new Vehicleowner;

          $count=Vehicle::all()->where('plant_id',$id)->where('ownership_type',$create_role)->count();
          $vehicle->plant_id=$plant_id;
          $vehicle->vehicle_id='public'.($count+1);
          $vehicle->owner_id=$id;
          $vehicle->ownership_type=$create_role;

          $check_vehicle=DB::table('vehicle')->where('vehicle_number',request('vehicleNumber'))->orWhere('vehicle_rc_number',request('rcNumber'))->orWhere('insurance_number',request('insuranceNumber'))->count();

          if($check_vehicle)
          {
            $error="This Vehicle All Ready Registerd";
              return view('create.addDetails',[
                
                        'create_role'=>$create_role,
                         'user_id'=>$plant_id,
                         'error'=>0,
                         'create_user_id'=>$id,
                         'users'=>$users,
                         'drivere_list'=>$drivere_list,

              ]);
          }

          $vehicle->vehicle_type=request('vehicleType');
          $vehicle->vehicle_number=request('vehicleNumber');
          $vehicle->vehicle_rc_number=request('rcNumber');
          $vehicle->vehicle_rc_doc=request('rcDoc');
          $vehicle->expiry_date_rc=request('expiryRc');
          $vehicle->insurance_number=request('insuranceNumber');
          $vehicle->insurance_doc=request('insuranceDoc');
          $vehicle->expiry_date_insurance=request('expiryInsuranceDate');
          $vehicle->fitness_id_number=request('fitnessNumber');
          $vehicle->fitness_id_doc=request('fitnessDoc');
          $vehicle->expiry_date_fitness_id=request('expiryFitness');
          
          $vehicle->photo="vehicle/phpto.png";



          $vehicleowner->user_id=$id;
          $vehicleowner->plant_id=$plant_id;

          $vehicleowner->name_hin=request('ownerNameInHindi');
          $vehicleowner->pin_code=request('pinCode');
          $vehicleowner->address=request('address');
          $vehicleowner->emergency_contact_number=request('emergencyNo');

          $vehicleowner->payee_name=request('payeeName');
          $vehicleowner->bank_name=request('bankName');
          $vehicleowner->account_number=request('actNumber');
          $vehicleowner->ifsc_code=request('ifscNumber');
          $vehicleowner->aadhar_number=request('aadharNumber');
          $vehicleowner->aadhar_card_doc=request('aadharDoc');
          // $vehicleowner->opening_balance_type=request('');
          // $vehicleowner->opening_amount=request('');
          $vehicleowner->photo='photo/image.png';
          
          $x=$vehicle->save();
          if($x)
          {
            $vehicleowner->save();
          }
          

          if($vehicleowner and $vehicle)
          {
            Registration::where('user_id',$id)->update(['details_status'=>'1']);
             return redirect()->route('memberlist');
          }

           }

        if($create_role=="outlet")
          {
            $rules=[
            'plant_id'=>'required',
            'bmc_id'=>'required',
            'outlet_id'=>'required',
            'outlet_name'=>'required',
            'name_in_hindi'=>'required',
            'father_name'=>'required',
            'father_name_hindi'=>'required',
            'village'=>'required',
            'full_address'=>'required',
            'pin_code'=>'required',
            'gender_name'=>'required',
            'dob'=>'required',
            'open_bal_type'=>'required',
            'opening_amount'=>'required',
            'payee_name'=>'required',
            'bank_name'=>'required',
            'act_number'=>'required',
            'ifsc_code'=>'required',
            'aadhar_number'=>'required',
            ];

            $validator=Validator::make($request->all(),$rules);
            if ($validator->fails()) {
                return response()->json( $validator->errors(),400);
            }

               $outlet=new Outletdetails;

               $bmc_id=request('bmc_id');
               if($bmc_id !='none')
               {
                 Registration::where('user_id',$id)->update(['bmc_id'=>$bmc_id]);
               }
               $outlet->user_id=$id;
               $outlet->plant_id=$plant_id;
          
               $outlet->outlet_name=request('society_name');
               $outlet->name_hin=request('name_in_hindi');
               $outlet->father_name_eng=request('father_name');
               $outlet->father_name_hin=request('father_name_hindi');

               $village_name=request('village');
               $new_village_name=request('new_village');

               if($village_name !='none'){
                    $outlet->village_name=$village_name;
               }else{
                    $outlet->village_name=$new_village_name;
               }

               $outlet->address=request('full_address');
               $outlet->pin_code=request('pin_code');
               $outlet->gender=request('gender_name');
               $outlet->dob=request('dob');
               $outlet->anniversary_date=request('anniversaryDate');
               $outlet->emergency_contact_number=request('emergencyContactNumber');
               $outlet->blood_group=request('bloodGroup');
               $outlet->opening_balance_type=request('open_bal_type');
               $outlet->opening_amount=request('opening_amount');

               $outlet->payee_name=request('payee_name');
               $outlet->bank_name=request('bank_name');
               $outlet->account_number=request('act_number');
               $outlet->ifsc_code=request('ifsc_code');
               $outlet->aadhar_number=request('aadhar_number');
               $outlet->aadhar_card_doc='doc';
               $outlet->photo='photo';//request('photo');

               $x=$outlet->save();

               if($x){
                    Registration::where('user_id',$id)->update(['details_status'=>'1']);

                    return redirect()->route('memberlist');
               }


          }
          

     }
//////------------------------PRIVETE VEHICLE ------------------/////
     public function privateVehicle($id,$role){
      $users=Registration::all()->where('user_id',$id);
      $drivere_list=Staff::all()->where('designation','driver')->pluck('user_id');
        return view('create.privatevehicledetails',[
            'role'=>$role,
            'user_id'=>$id,
            'users'=>$users,
            'drivere_list'=>$drivere_list,
            'error'=>0,
        ]);
     }

     public function sendPrivateVehicleDetails(Request $request,$id,$role){
      $rules=[
                'vehicleType'=>'required|max:20',
                'vehicleNumber'=>'required|max:20',
                'driver'=>'required|max:20',
                'rcNumber'=>'required|max:30',
                'rcDoc'=>'required|mimes:jpeg,bmp,png,pdf|max:4000',
                'expiryRc'=>'required|max:20',
                'insuranceNumber'=>'required|max:30',
                'insuranceDoc'=>'required|mimes:jpeg,bmp,png,pdf|max:4000',
                'expiryInsuranceDate'=>'required|max:20',
                'pollutionNo'=>'required|max:30',
                'pollutionDoc'=>'required|mimes:jpeg,bmp,png,pdf|max:4000',
                'expiryPollutionDate'=>'required|max:20',

                'fitnessNumber'=>'required|max:30',
                'fitnessDoc'=>'required|mimes:jpeg,bmp,png,pdf|max:4000',
                'expiryFitness'=>'required|max:20',
                'photo'=>'required|mimes:jpeg,bmp,png|max:4000',
                ];

          $validator=Validator::make($request->all(),$rules);
          if ($validator->fails()) {
            return response()->json( $validator->errors(),400);
          }

          if ($request->hasfile('rcDoc')) {
            $file=$request->file('rcDoc');
            $extention=$file->getClientOriginalExtension();
            $rcName='rc'.time().'.'.$extention;
            $file->move('storage/documents/',$rcName);
          }
          if ($request->hasfile('insuranceDoc')) {
            $file=$request->file('insuranceDoc');
            $extention=$file->getClientOriginalExtension();
            $insuName='insu'.time().'.'.$extention;
            $file->move('storage/documents/',$insuName);
          }
          if ($request->hasfile('pollutionDoc')) {
            $file=$request->file('pollutionDoc');
            $extention=$file->getClientOriginalExtension();
            $pollName='poll'.time().'.'.$extention;
            $file->move('storage/documents/',$pollName);
          }
          if ($request->hasfile('fitnessDoc')) {
            $file=$request->file('fitnessDoc');
            $extention=$file->getClientOriginalExtension();
            $fitName='fit'.time().'.'.$extention;
            $file->move('storage/documents/',$fitName);
          }
          if ($request->hasfile('photo')) {
            $file=$request->file('photo');
            $extention=$file->getClientOriginalExtension();
            $photoName='vphoto'.time().'.'.$extention;
            $file->move('storage/documents/',$photoName);
          }


          $vehicle= new Vehicle;

          $users=Registration::all()->where('user_id',$id);
          $count=Vehicle::all()->count();
          $drivere_list=Staff::all()->where('designation','driver')->pluck('user_id');

          $count=$count+1;

          $vehicle->plant_id=$id;
          $vehicle->vehicle_id=$role.$count;
          $vehicle->owner_id=$id;
          $vehicle->ownership_type=$role;

          $check_vehicle=DB::table('vehicle')->where('vehicle_number',request('vehicleNumber'))->orWhere('vehicle_rc_number',request('rcNumber'))->orWhere('insurance_number',request('insuranceNumber'))->orWhere('pollution_id_number',request('pollutionNo'))->orWhere('fitness_id_number',request('fitnessNumber'))->count();
          if($check_vehicle)
          {
            $error="This Vehicle Already Registerd";
              return view('create.privatevehicledetails',[
                  'role'=>$role,
                  'user_id'=>$id,
                  'error'=>$error,
                  'users'=>$users,
                  'drivere_list'=>$drivere_list,
              ]);
          }


          $vehicle->vehicle_type=request('vehicleType');
          $vehicle->vehicle_number=request('vehicleNumber');
          $vehicle->Driver_id=request('driver');
          $vehicle->vehicle_rc_number=request('rcNumber');
          $vehicle->vehicle_rc_doc=$rcName;
          $vehicle->expiry_date_rc=request('expiryRc');
          $vehicle->insurance_number=request('insuranceNumber');
          $vehicle->expiry_date_insurance=request('expiryInsuranceDate');
          $vehicle->insurance_doc=$insuName;
          $vehicle->pollution_id_number=request('pollutionNo');
          $vehicle->pollution_doc=$pollName;
          $vehicle->expiry_date_pollutions_id=request('expiryPollutionDate');
          $vehicle->fitness_id_number=request('fitnessNumber');
          $vehicle->fitness_id_doc=$fitName;
          $vehicle->expiry_date_fitness_id=request('expiryFitness');
          $vehicle->photo=$photoName;

          $x=$vehicle->save();

          if ($x) {
            return redirect()->route('memberlist',[
                                  'id'=>$id,
                                ]);
          }

     }
/////------------------------PRIVETE VEHICLE ------------------/////
     public function logout(){
     	session()->flush();
     	return redirect()->route('login',[
     		'error'=>0,
     	]);
     }
///////////////////// START MEMBER LIST /////////
     public function MemberList(){
     $id=session('id_of_user');
      $member_data=Registration::all()->where('plant_id',$id);

      $users=Registration::all()->where('user_id',$id);
      return view('plant.memberList',[
        'users'=>$users,
        'user_id'=>$id,
        'member_data'=>$member_data,
      ]);
     }

     // public function allMembers(){
     //  $id=session('id_of_user');
     // return DataTables::of(Registration::all())->make(true);
     // }


     public function detailsSubmission($id)
     {
       $users=Registration::all()->where('user_id',$id);
       return view('plant.detailsSubmition',[
        'users'=>$users,
        'user_id'=>$id,
        'error'=>'0',
      ]);
     }

      public function checkPhoneNumber($id)
     {
      $phone_number=request('phoneNumber');
       $users=Registration::all()->where('phone_number',$phone_number);

       if($users->count())
       {
            if ($users[0]['details_status']=='0') {
            
            }
            else{

            }
            return redirect()->route('detailssubmission',[
             
           ]);
       }
       return redirect()->route('detailssubmission',[
        'id'=>$id,
      ]);
     }
     
//////////////////END MEMBER LIST /////////
     

}

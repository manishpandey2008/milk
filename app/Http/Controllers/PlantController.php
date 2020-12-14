<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registration;
use App\Models\Model\Create\Society;
use App\Models\Model\Create\Farmer;
use App\Models\Model\Create\Staff;
use App\Models\Model\Create\Vehicle;
use App\Models\Model\Create\Vehicleowner;
use App\Models\Test;
use DataTables;
use DB;
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

     public function registration($id,$role){
     	$work_role=session('role_of_work');
     	$id_of_user=session('id_of_user');
     	$users=Registration::all()->where('user_id',$id_of_user);
     	

     	return view('registration',[
     		'user_id'=>$id,
     		'users'=>$users,
     		'role'=>$role,
               'error'=>0,
     	]);
     }
     public function otpverification($id,$role){
     	$user=new Registration;

      $count=Registration::all()->where('plant_id',$id)->where('working_role',$role)->count();
      $count=$count+1;

      $user->user_id=$role.$count;
      $user->remember_token=request('_token');
     	$user->plant_id=$id;	
     	$user->creater_user_id=$id;
     	$user->working_role=$role;
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
                    'role'=>$role,
                    'error'=>$error,
                    ]);
          }

          $user->phone_number=request('phone_number');
     	$user->user_otp='1234';
     	$user->otp_conformation_status='0';
     	$user->email=request('email');
     	$user->user_photo="photo/manish.png";
     	$user->password=request('password');
     	$user->details_status='0';

     	$user->save();

          session(['create_work_role' => $role]);
          session(['create_user_id' => $user->user_id]);

          $users=Registration::all()->where('user_id',$id);

          return view('otpverification',[
               'users'=>$users,
               'role'=>$role,
               'user_id'=>$id,
               'error'=>0,
          ]);

     }


     public function details($id,$role){

          $users=Registration::all()->where('user_id',$id);

          $create_user_id=session('create_user_id');

          $otp=Registration::all()->where('user_id',$create_user_id)->where('user_otp',request('otp'))->count();

          ////// FoR bmc
          $dropDownList=Registration::all()->where('creater_user_id',$id);

          if($role=="farmer")
          {
              $village_list=Farmer::all()->pluck('village_name');
               if($otp)
               {
                    return view('create.farmerdetails',[
                    'users'=>$users,
                    'role'=>$role,
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
                         'role'=>$role,
                         'user_id'=>$id,
                         'error'=>$error,
                    ]);

               }
          }
          else if($role=="society")
          {
              $village_list=Society::all()->pluck('village_name');
               if($otp)
               {
                $vehicle_id=Vehicle::all()->pluck('vehicle_id');
                    return view('create.societydetails',[
                    'users'=>$users,
                    'role'=>$role,
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
                         'role'=>$role,
                         'user_id'=>$id,
                         'error'=>$error,
                    ]);

               }
              
          }
          else if($role=="staff")
          {
            $village_list=Staff::all()->pluck('village_name');
                if($otp)
               {
                    return view('create.staffdetails',[
                    'users'=>$users,
                    'role'=>$role,
                    'user_id'=>$id,
                    'create_user_id'=>$create_user_id,
                    'village_list'=>$village_list,
                    ]);
               }
               else{
                    $error="Enter Otp Is Wrong";
                    return view('otpverification',[
                         'users'=>$users,
                         'role'=>$role,
                         'user_id'=>$id,
                         'error'=>$error,
                    ]);

               }
          }
          else if($role=="vehicle_owner")
          {
             $drivere_list=Staff::all()->where('designation','driver')->pluck('user_id');
                return view('create.publicvehicledetails',[
                         'role'=>$role,
                         'user_id'=>$id,
                         'error'=>0,
                         'create_user_id'=>$create_user_id,
                         'users'=>$users,
                         'drivere_list'=>$drivere_list,
                ]);
          }
     }

     public function sendDetails($role){
         $id=session('create_user_id');
         $plant_id=session('id_of_user');

          if($role=="society")
          {
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

               if($village_name !='none'){
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
               $society->aadhar_card_doc=request('aadhar_doc');
               $society->photo=request('photo');
               $society->society_type=request('society_type');
               $society->payment_type=request('payment_type');
               $society->root_supervisor=request('supervisior');
               $society->commission_type=request('commission_type');
               $society->commission_amount=request('commission_val');

               $x=$society->save();

               if($x){
                    Registration::where('user_id',$id)->update(['details_status'=>'1']);

                    return redirect()->route('memberlist',[
                                  'id'=>$plant_id,
                                ]);
               }


          }


          else if ($role=="farmer") {
             $farmer=new Farmer;

             $farmer->user_id=$id;
             $farmer->plant_id=$plant_id;
             $farmer->bmc_id=request('bmcId');
             $farmer->society_id=request('societyId');
             $bmcId=request('bmcId');
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
             $farmer->aadhar_card_doc=request('aadharDoc');
             $farmer->photo=request('photo');
           

              $x=$farmer->save();

               if($x){
                    Registration::where('user_id',$id)->update(['details_status'=>'1']);
                return redirect()->route('memberlist',[
                                  'id'=>$plant_id,
                                ]);
               }
          }

          else if ($role=="staff") {
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
             $staff->aadhar_card_doc=request('aadharDoc');
             $staff->pan_card_number=request('panNumber');
             $staff->pan_card_doc=request('panDoc');
             $staff->driver_licence_number=request('drivingLicenceNumber');
             $staff->driver_licence_doc=request('drivingLicenceDoc');
             $staff->driver_licence_issue_date=request('licenceIssueDate');
             $staff->driver_licence_expiry_date=request('licenceExpiryDate');
             $staff->medical_certificate=request('medicalCft');

             $staff->payee_name=request('payeeName');
             $staff->bank_name=request('bankName');
             $staff->account_number=request('actNumber');
             $staff->ifsc_code=request('ifscNumber');
             $staff->photo=request('photo');
             
             $x= $staff->save();
            


               if($x){
                    Registration::where('user_id',$id)->update(['details_status'=>'1']);
                return redirect()->route('memberlist',[
                                  'id'=>$plant_id,
                                ]);
               }
           
          }

      else if ($role=="vehicle_owner"){
         $drivere_list=Staff::all()->where('designation','driver')->pluck('user_id');
          $users=Registration::all()->where('user_id',$plant_id);

              $vehicle=new Vehicle;
              $vehicleowner=new Vehicleowner;

          $count=Vehicle::all()->where('plant_id',$id)->where('ownership_type',$role)->count();
          $vehicle->plant_id=$plant_id;
          $vehicle->vehicle_id='public'.($count+1);
          $vehicle->owner_id=$id;
          $vehicle->ownership_type=$role;

          $check_vehicle=DB::table('vehicle')->where('vehicle_number',request('vehicleNumber'))->orWhere('vehicle_rc_number',request('rcNumber'))->orWhere('insurance_number',request('insuranceNumber'))->count();

          if($check_vehicle)
          {
            $error="This Vehicle All Ready Registerd";
              return view('create.addDetails',[
                
                        'role'=>$role,
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
             return redirect()->route('memberlist',[
                                  'id'=>$plant_id,
                                ]);
          }



           }
          

     }

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
//////------------------------PRIVETE VEHICLE ------------------/////
     public function sendPrivateVehicleDetails($id,$role){
          $vehicle= new Vehicle;

          $users=Registration::all()->where('user_id',$id);
          $count=Vehicle::all()->where('plant_id',$id)->where('ownership_type',$role)->count();
          $drivere_list=Staff::all()->where('designation','driver')->pluck('user_id');

          $count=$count+1;

          $vehicle->plant_id=$id;
          $vehicle->vehicle_id=$role.$count;
          $vehicle->owner_id=$id;
          $vehicle->ownership_type=$role;

          $check_vehicle=DB::table('vehicle')->where('vehicle_number',request('vehicleNumber'))->orWhere('vehicle_rc_number',request('rcNumber'))->orWhere('insurance_number',request('insuranceNumber'))->count();
          if($check_vehicle)
          {
            $error="This Vehicle All Ready Registerd";
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
          // $vehicle->=request('');
          // $vehicle->=request('');
          // $vehicle->=request('');
          // $vehicle->=request('');
          // $vehicle->=request('');

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
     public function memberList($id){
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

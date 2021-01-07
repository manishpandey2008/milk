<?php

namespace App\Http\Controllers\Society;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Create\Farmer;
use App\Models\Model\Plant\Plantproducts;
use App\Models\Model\Society\Orderdetails;
use App\Models\Model\Society\Societystorage;
use App\Models\Model\Society\Societysell;
use App\Models\Model\Transactiondetails;
use DB;
use Validator;
class SocietyController extends Controller
{
    public function home(Request $request){

     	$work_role=session('role_of_work');
     	$id_of_user=session('id_of_user');
     	$users=Registration::all()->where('user_id',$id_of_user)->first();

     	return view('society.societyHome',[
     		'user'=>$users,
     		'role'=>$work_role,
     	]);
     }

     public function registration(Request $request){
        $id=session('id_of_user');
        $role=session('role_of_work');
     	$users=Registration::all()->where('user_id',$id)->first();
     	return view('society.registration',[
     		'user'=>$users,
     		'role'=>$role,
     		'user_id'=>$id,
     		'error'=>0,
     	]);
     }

     public function otpverification(Request $request){
            $rules=[
                'role'=>'required|max:20',
                'first_name'=>'required|max:30',
                'mid_name'=>'max:30',
                'last_name'=>'required|max:30',
                'phone_number'=>'required|max:10',
                'email_id'=>'max:50',
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
            $role=session('role_of_work');


     			$user=new Registration;

     			$plant_id=Registration::all()->where('user_id',$id)->pluck('plant_id');
     			session(['plant_id' => $plant_id[0]]);
     			$bmc_id=Registration::all()->where('user_id',$id)->pluck('bmc_id');
     			session(['bmc_id' => $bmc_id[0]]);

	     		$count=Registration::all()->count();

	     		$users=Registration::all()->where('user_id',$id)->first();

	     		$count=$count+1;

	     		$user->user_id='10'.$count;
	     		$user->remember_token=request('_token');
     			$user->plant_id=$plant_id[0];
     			$user->bmc_id=$bmc_id[0];	
     			$user->society_id=$id;	
     			$user->creater_user_id=$id;
     			$user->working_role='farmer';
     			$user->first_name=request('first_name');
     			$user->mid_name=request('mid_name');
     			$user->last_name=request('last_name');

     		    $test_phone=Registration::where('phone_number',request('phone_number'))->count();

     		     if ($test_phone) {
     		          $error="This Phone Number Registerd";
     		         
     		          return view('registration',[
     		               'user_id'=>$id,
     		               'user'=>$users,
     		               'role'=>$role,
     		               'error'=>$error,
     		               ]);
     		     }

     		    $user->phone_number=request('phone_number');
     			$user->user_otp='1234';
     			$user->otp_conformation_status='0';
     			$user->email=request('email');
     			$user->user_photo=$fileName;
     			$user->password=request('password');
     			$user->details_status='0';
                $user->login_status='0';
                $user->active_status='1';

     			$user->save();

     		     session(['create_work_role' => $role]);
     		     session(['create_user_id' => $user->user_id]);



                 return redirect()->route('otpverificationpage');
     		   
     		     
     }

     public function otpVerificationPage(Request $request)
     {
        $id=session('id_of_user');
        $role=session('role_of_work');
        $users=Registration::all()->where('user_id',$id)->first();

        return view('society.otpverification',[
            'user'=>$users,
            'user_id'=>$id,
            'role'=>$role,
            'error'=>0
        ]);
     }

     public function details(Request $request){

        $id=session('id_of_user');
        $role=session('role_of_work');
     	$users=Registration::all()->where('user_id',$id)->first();

        $create_user_id=session('create_user_id');

        $otp=Registration::all()->where('user_id',$create_user_id)->where('user_otp',request('otp'))->count();
        $village_list=Farmer::all()->pluck('village_name');
        $plant_id=session('plant_id');
        $bmc_id=session('bmc_id');
        if($otp)
        {
             return view('society.farmerForm',[
             'user'=>$users,
             'role'=>$role,
             'user_id'=>$id,
             'create_user_id'=>$create_user_id,
             'plant_id'=>$plant_id,
             'bmc_id'=>$bmc_id,
             'village_list'=>$village_list,
             ]);
        }
        else{

        	$error="Enter Otp Is Wrong";
        	return view('society.otpverification',[
        	     'user'=>$users,
        	     'role'=>$role,
        	     'user_id'=>$id,
        	     'error'=>$error,
        	]);
        }

     }

     public function sendDetails(Request $request){

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

        $id=session('id_of_user');
        $role=session('role_of_work');
     	$create_user_id=session('create_user_id');
        $plant_id=session('plant_id');
        $bmc_id=session('bmc_id');

        $farmer=new Farmer;
     	$farmer->user_id=$create_user_id;
     	$farmer->plant_id=$plant_id;
     	$farmer->bmc_id=$bmc_id;
     	$farmer->society_id=$id;
     	$farmer->selected_chart_code=request('chartCategory');
     	
        $farmer->name_in_hindi=request('nameInHindi');
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
     	       	Registration::where('user_id',$create_user_id)->update(['details_status'=>'1']);
     	   		return redirect()->route('society.farmerlist');
     	  }

     }

     public function farmerList(Request $request){
        $id=session('id_of_user');
        $role=session('role_of_work');
     	$users=Registration::all()->where('user_id',$id)->first();
     //	$farmer_list=Farmer::all()->where('society_id',$id)->where('details_status',1);

     	$farmer_list=Registration::join('farmerdetails', 'registration.user_id', '=', 'farmerdetails.user_id')
            ->select('registration.user_id','registration.first_name','registration.mid_name','registration.last_name','registration.phone_number','registration.email','registration.user_photo','farmerdetails.father_name_eng','farmerdetails.village_name','farmerdetails.payee_name','farmerdetails.bank_name','farmerdetails.account_number','farmerdetails.ifsc_code',)
        	->where('details_status','1')
            ->where('registration.society_id',$id)
            ->get();

        
     	return view('society.farmerList',[
     		'user'=>$users,
     		'farmer_list'=>$farmer_list,
     		'user_id'=>$id,
     	]);


     }

     public function farmerProfile(Request $request,$farmerId){
        $id=session('id_of_user');
        $role=session('role_of_work');
		$users=Registration::all()->where('user_id',$id)->first();
     	$farmerProfile=Registration::join('farmerdetails', 'registration.user_id', '=', 'farmerdetails.user_id')
            ->where('farmerdetails.user_id',$farmerId)
            ->where('registration.user_id',$farmerId)
            ->get();
        	
        	//return $farmerProfile[0];
            return view('society.farmerDetails',[
            	'user'=>$users,
            	'user_id'=>$id,
            	'fp'=>$farmerProfile[0],
            ]);

     }
//-----------------CART------------------//

     public function NewOrder()
     {
        $id=session('id_of_user');
        $users=Registration::all()->where('user_id',$id)->first();
        $product_list=Plantproducts::all()->where('plant_id',$users['plant_id']);
        $cart_product_count=Orderdetails::all()->where('order_by_id',$id)->where('order_status','0')->count();


        return view('society.productOrder',[
            'user'=>$users,
            'product_list'=>$product_list,
            'add_product_count'=>$cart_product_count,
            'msg'=>0,
        ]);
     }

     public function ProductData()
     {
        $id=session('id_of_user');
        $product_id=request('product_id');
        $data=Plantproducts::all()->where('product_id',$product_id)->first();

        $find_product=Orderdetails::all()->where('product_id',$product_id)->where('order_by_id',$id)->where('order_status','0')->count();

        if($find_product){
            return ['data'=>'0'];
        }
        else{
            return ['data'=>$data];
        }

        
     }

     public function AddCart(Request $request)
     {
        $id=session('id_of_user');
        $rules=[
                'productId'=>'required|max:20',
                'productName'=>'required|max:30',
                'productCount'=>'required|max:10',
                'totalPrice'=>'required|max:10',
                ];

        $validator=Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json( $validator->errors(),400);
        }

         
         $product=new Orderdetails;
         $users=Registration::all()->where('user_id',$id)->first();

         $product->plant_id=$users['plant_id'];

         $count=Orderdetails::all()->count();
         $product->cart_add_id='cart'.($count+1);

         $product->order_by_id=$id;
         $product->order_by_work=$users['working_role'];

         $product->product_id=request('productId');
         $product->product_name=request('productName');
         $product->product_quantity=request('productCount');


         $product->sell_price_each=request('totalPrice')/request('productCount');

         $product->order_status='0';
         
        $x=$product->save();



        if($x){
            $product_list=Plantproducts::all()->where('plant_id',$users['plant_id']);
            $cart_product_count=Orderdetails::all()->where('order_by_id',$id)->where('order_status','0')->count();

            return view('society.productOrder',[
            'user'=>$users,
            'product_list'=>$product_list,
            'add_product_count'=>$cart_product_count,
            'msg'=>"Your New Product Added",
            ]);
        }
         
     }

     public function SocietyCartTable()
     {
         $societyId=request('id');
         $proList=Orderdetails::all()->where('order_by_id',$societyId)->where('order_status','0');

         $html='';
         foreach ($proList as $pl) {
             $html.='<tr>
                        <td>'.$pl['product_name'].'</td>
                        <td>'.$pl['product_quantity'].'</td>
                        <td>'.$pl['product_quantity']*$pl['sell_price_each'].'</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-secondary editProuct" data-toggle="modal" data-target=".editProductModel" value="'.$pl['product_id'].'">Edit</button>
                                <button type="button" class="btn btn-secondary deleteProduct" value="'.$pl['product_id'].'">Delete</button>
                            </div>
                        </td>
                    </tr>';

         }

         return $html;

     }
     public function SocietyProductOrder()
     {  
        $id=session('id_of_user');
        $count=Orderdetails::all()->count();
        $order_id='order'.($count+1);
        
        $x=DB::table('orderdetails')->where('order_by_id',$id)->where('order_status','0')->update(['order_id'=>$order_id,'order_status'=>'1']);
        
        $orderList=Orderdetails::all()->where('order_by_id',$id)->where('order_status','1')->groupBy('order_id');
        $users=Registration::all()->where('user_id',$id)->first();
       return view('society.productOrderTable',[
            'user'=>$users,
            'order_list'=>$orderList,
        ]);
     }

     public function SocietyOrderTable()
     {  $id=session('id_of_user');
         $users=Registration::all()->where('user_id',$id)->first();
         $orderList=Orderdetails::all()->where('order_by_id',$id)->where('order_status','1')->groupBy('order_id');
   
         return view('society.productOrderTable',[
            'user'=>$users,
            'order_list'=>$orderList,
        ]);
     }

     public function OrderProduclList()
     {
        $orderId=request('data');
        $order_data=Orderdetails::all()->where('order_status','1')->where('order_id',$orderId);

        $html1='';
        $html2='';
        $totalPrice=0;
        $plantStatus="";
        $vehicleStatus="";
        $societystatus="";
        foreach ($order_data as $sd) {
            $html1.='<tr>
                        <td>'.$sd['product_name'].'</td>
                        <td>'.$sd['product_quantity'].'</td>
                        <td>'.$sd['product_quantity']*$sd['sell_price_each'].'</td>
                    </tr>';
            $totalPrice+=$sd['product_quantity']*$sd['sell_price_each'];
            $plantStatus=$sd['plant_status'];
            $vehicleStatus=$sd['vehicle_status'];
            $societystatus=$sd['order_by_status'];
        }
        if ($plantStatus=='1') {
            $plantStatus='Yes';
        }
        if($vehicleStatus=='1')
        {
            $vehicleStatus="Yes";
        }
        $html2='<tr style="color:green">
                    <td>'.$totalPrice.'</td>
                    <td>Yes</td>
                    <td>'.$plantStatus.'</td>
                    <td>'.$vehicleStatus.'</td>
                    <td id="conf'.$orderId.'">';
            if($societystatus=='1')
            {
                $html2.='<button value="'.$orderId.'" class="btn btn-primary invoice_down"><span class="fa fa-download"></span></button>';
            }else{
                $html2.='<button value="'.$orderId.'" class="btn btn-primary society_confom">Click</button>';
            }
            $html2.='</td></tr>';


        return ['html1'=>$html1,'html2'=>$html2];
     }

     public function SocietyConformation()
     {
        $orderId=request('data');
        $html='<button value="'.$orderId.'" class="btn btn-primary invoice_down"><span class="fa fa-download"></span></button>';

        DB::table('orderdetails')->where('order_id',$orderId)->update(['order_by_status'=>'1']);
    
        $allProduct=Orderdetails::all()->where('order_id',$orderId);
        $userId=session('id_of_user');

        foreach ($allProduct as $ap) {

            $x=Societystorage::all()->where('product_name',$ap['product_name'])->where('store_by_id',$userId)->first();
            if($x){
                $x=$x['total_stock']+$ap['product_quantity'];
                DB::table('societystorage')->where('product_name',$ap['product_name'])->where('store_by_id',$userId)->update(['total_stock'=>$x]);
            }else{
                $addNew=new Societystorage;
                $count=Societystorage::all()->count();
                $addNew->storage_id='storage'.($count+1);
                $addNew->store_by_id=$userId;
                $addNew->product_id=$ap['product_id'];
                $addNew->product_name=$ap['product_name'];
                $unit=Plantproducts::all()->where('product_id',$ap['product_id'])->first();
                $addNew->product_unit=$unit['product_unit'];
                $addNew->each_sell_price=$ap['sell_price_each'];
                $addNew->total_stock=$ap['product_quantity'];

                $addNew->save();

            }

        }
        return '<p>'.$html.'</p>';
     }

     //-----------------END CART------------------//

     //---------------------SELL PRODUCT-------//

     public function NewSell()
     {
        $id=session('id_of_user');
        $users=Registration::all()->where('user_id',$id)->first();
        $product_list=Societystorage::all()->where('store_by_id',$id);
        $farmer_list=Registration::all()->where('working_role','farmer')->where('society_id',$id);

        return view('society.newProductSell',[
            'user'=>$users,
            'product_list'=>$product_list,
            'farmer_list'=>$farmer_list,
            'msg'=>0,
        ]);
     }

     public function GetCartData()
     {
       

        $farmerId=request('farmer_id');
        $farmerData=Registration::all()->where('user_id',$farmerId)->first();
        $farmerName=$farmerData['first_name'].' '.$farmerData['mid_name'].' '.$farmerData['last_name'];
        $cartData=Societysell::all()->where('consumer_id',$farmerId)->where('order_status','0');
        $cartCount=$cartData->count();
        $totalPrice=0;
        foreach ($cartData as $cd) {
            $totalPrice=$totalPrice+$cd['price'];
        }
        return[
            'farmer_name'=>$farmerName,
            'cart_count'=>$cartCount,
            'total_price'=>$totalPrice,
            'cart_data'=>$cartData,
        ];
     }

     public function GetCartTable()
     {
         $farmerId=request('farmer_id');
         $cartData=Societysell::all()->where('consumer_id',$farmerId)->where('order_status','0');
         $data=0;

         foreach ($cartData as $cd) {
             $data.='<tr>
                        <td>'.$cd['product_name'].'</td>
                        <td>'.$cd['amount'].'</td>
                        <td>'.$cd['price'].'</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-secondary editProuct" data-toggle="modal" data-target=".editProductModel" value="'.$cd['product_id'].'">Edit</button>
                                <button type="button" class="btn btn-secondary deleteProduct" value="'.$cd['product_id'].'">Delete</button>
                            </div>
                        </td>
                    </tr>';

            // $data+=$cd['price'];
         }

         return $data;
     }

     public function ProductInfo()
     {
         $pro_name=request('pro_name');
         $pro_data=Societystorage::all()->where('product_name',$pro_name)->first();

         return $pro_data;
     }

     public function AddProduct()
     {

        $data=request('sendData');
        $add=new Societysell;

         $check=Societysell::all()->where('consumer_id',$data['farmer_id'])->where('product_name',$data['productname'])->where('order_status','0')->count();
         $id=session('id_of_user');

         if($check){
             $cart_count=Societysell::all()->where('consumer_id',$data['farmer_id'])->where('order_status','0');
             $count_pro=$cart_count->count();
             $total_price_of_cart=0;
             foreach ($cart_count as $cc) {
                $total_price_of_cart+=$cc['price'];
             }
            return ['conf'=>'0','countProduct'=>$count_pro,'total_price'=>$total_price_of_cart];
         }else{

            $count=Societysell::all()->count();
             $add->cart_id='cart'.($count+1);

             $add->order_status='0';
             $add->sell_by=$id;
             $add->sell_by_status='1';
             $add->consumer_id=$data['farmer_id'];
             $add->consumer_name=$data['farmer_name'];
             $add->product_name=$data['productname'];
             $add->amount=$data['productAmount'];
             $add->price=$data['totalPrice'];
             $add->save();

            $cart_count=Societysell::all()->where('consumer_id',$data['farmer_id'])->where('order_status','0');
             $count_pro=$cart_count->count();
             $total_price_of_cart=0;
             foreach ($cart_count as $cc) {
                $total_price_of_cart+=$cc['price'];
             }

             return ['conf'=>'1','countProduct'=>$count_pro,'total_price'=>$total_price_of_cart];
         }
     }

     public function FinalProductSell()
     {
         $farmerId=request('farmer_id');
         $count=Societysell::all()->count();
         $order_id='order'.($count+1);
         $id=session('id_of_user');

         $x=DB::table('societysell')->where('consumer_id',$farmerId)->where('order_status','0')->update(['order_id'=>$order_id,'order_status'=>'1']);
         $x=1;
         if($x)
         {
            $allOrderProduct=Societysell::all()->where('order_id',$order_id);
            foreach ($allOrderProduct as $value) {
               $stock=Societystorage::all()->where('product_name',$value['product_name'])->where('store_by_id',$id)->pluck('total_stock');
               $stock=(float)$stock[0];
               $orer=(float)$value['amount'];
               DB::table('societystorage')->where('product_name',$value['product_name'])->where('store_by_id',$id)->update(['total_stock'=>$stock-$orer]);
            }
            return '1';
         }
         return '0';
     }

    public function ProductSellTable()
    {
         $id=session('id_of_user');
        $users=Registration::all()->where('user_id',$id)->first();
        $selList=Societysell::all()->where('order_status','1')->groupBy('order_id');

        return view('society.productSellTable',[
            'user'=>$users,
            'sell_list'=>$selList,
        ]);
    }

    public function SellProduclList()
    {
        $orderId=request('data');
        $sell_data=Societysell::all()->where('order_status','1')->where('order_id',$orderId);

        $html='';
        $totalPrice=0;
        foreach ($sell_data as $sd) {
            $html.='<tr>
                        <td>'.$sd['product_name'].'</td>
                        <td>'.$sd['amount'].'</td>
                        <td>'.$sd['price'].'</td>
                    </tr>';
            $totalPrice+=$sd['price'];
        }

        return ['html'=>$html,'total_price'=>$totalPrice];
    }
     //---------------END SELL PRODUCT------------//


    //--------------------------------Start Of Transaction Work-------------///

    public function NewTransactionForm()
    {
        $id=session('id_of_user');
        $role=session('role_of_work');
        $users=Registration::all()->where('user_id',$id)->first();
        $toList=DB::table('registration')->where('society_id',$id)->get();

        return view('society.newTransition',[
            'user'=>$users,
            'to_list'=>$toList,
            'plant_id'=>$users['plant_id'],
            'msg'=>'0',
        ]);
    }

    public function AddTransaction(Request $request)
    {
        $rules=[
                'toId'=>'required|max:20',
                'toName'=>'required|max:30',
                'toRole'=>'required|max:30',
                'transactionAmount'=>'required|max:10',
                'transactionType'=>'required|max:20',
                'transactionMessage'=>'max:100',
                'transactionPhoto'=>'mimes:jpeg,bmp,png,pdf|max:4000',
                ];

        $validator=Validator::make($request->all(),$rules);
        if ($validator->fails()) {
            return response()->json( $validator->errors(),400);
        }
    
        $fileName="";
        if ($request->hasfile('transactionPhoto')) {
            $file=$request->file('transactionPhoto');
            $extention=$file->getClientOriginalExtension();
            $fileName=time().'.'.$extention;
            $file->move('storage/transactionPhoto/',$fileName);
        }
        $id=session('id_of_user');
        $role=session('role_of_work');

        $users=Registration::all()->where('user_id',$id)->first();
        $trData=new Transactiondetails;

        $toId=request('toId');

        $trData->plant_id=$users['plant_id'];
        $count=Transactiondetails::all()->count();
        $trData->transaction_id='tr'.($count+1);
        $trData->transaction_from='society';
        $trData->transaction_from_id=$id;
        $trData->transaction_to=request('toRole');
        $trData->transaction_to_id=request('toId');
        $trData->transaction_amount=request('transactionAmount');
        $trData->transaction_msg=request('transactionMessage');
        $trData->transaction_type=request('transactionType');
        $trData->transaction_photo=$fileName;

        $x=$trData->save();

        
         $toList=DB::table('registration')->where('society_id',$id)->get();
        if($x){
            return view('society.newTransition',[
            'user'=>$users,
            'to_list'=>$toList,
            'msg'=>'1',
            'type'=>'yes',
            'plant_id'=>$users['plant_id'],
            ]);
        }
        return view('society.newTransition',[
                'user'=>$users,
                'to_list'=>$toList,
                'msg'=>'1',
                'type'=>'no',
                'plant_id'=>$users['plant_id'],
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

    public function AllTransactionList()
    {
        $id=session('id_of_user');
        $role=session('role_of_work');
        $users=Registration::all()->where('user_id',$id)->first();
        $trFromList=Transactiondetails::all()->where('transaction_from_id',$id);
        $trToList=Transactiondetails::all()->where('transaction_to_id',$id);
        return view('society.transitionTable',[
            'user'=>$users,
            'trFromList'=>$trFromList,
            'trToList'=>$trToList,
        ]);
    }

    //--------------------------------End Of Transaction Work-------------///
}

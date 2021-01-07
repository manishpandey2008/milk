<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Society\Farmermilkcollection;
use Illuminate\Support\Facades\App;
use App\Models\Model\Society\Societysell;
use App\Models\Model\Society\Societystorage;
use App\Models\Model\Transactiondetails;
use DB;
use Validator;
class FarmerController extends Controller
{
    public function FarmerHome()
    {
        $id=session('id_of_user');
    	$plant_id =Registration::all()->where('user_id',$id)->pluck('plant_id');

    	$farmer_data=Registration::join('farmerdetails', 'registration.user_id', '=', 'farmerdetails.user_id')
            ->select()
        	->where('registration.user_id',$id)
        	->where('farmerdetails.user_id',$id)
            ->get();

        $new_milk_coll=Farmermilkcollection::all()
            ->where('user_id',$id)
            ->where('farmer_status','0')
            ->sortByDesc('id');

        $milk_coll=Farmermilkcollection::all()
            ->where('user_id',$id)
            ->where('farmer_status','1')
            ->sortByDesc('id')
            ->take(10);


    	return view('farmer.farmerDashboardHome',[
    		'user_id'=>$id,
    		'plant_id'=>$plant_id[0],
    		'fp'=>$farmer_data[0],
            'new_milk_coll'=>$new_milk_coll,
             'milk_coll'=>$milk_coll,
    	]);


    }

    public function farmerConformation()
    {

        $collid=request('data');

        $x=Farmermilkcollection::where('collectionId', $collid)
        ->update(['farmer_status' => '1']);
        if($x)
        {
            return "update data";
        }
    }

    public function MilkDataList()
    { 
        $id=session('id_of_user');
         $new_milk_coll=Farmermilkcollection::all()
            ->where('user_id',$id)
            ->where('farmer_status','1')
            ->sortByDesc("id");

    	$users=Registration::all()->where('user_id',$id);
    	return view('farmer.farmerDashboardAll',[
    		'user_id'=>$id,
    		'users'=>$users,
            'new_milk_coll'=>$new_milk_coll,
    	]);
    }

    public function FarmerTransitionList()
    {
        $id=session('id_of_user');
    	$users=Registration::all()->where('user_id',$id)->first();
        $trCreadit=Transactiondetails::all()->where('transaction_to_id',$id);
        $trDebit=Transactiondetails::all()->where('transaction_from_id',$id);
    	return view('farmer.farmerDashboardTransition',[
    		'user_id'=>$id,
    		'user'=>$users,
            'trCreadit'=>$trCreadit,
            'trDebit'=>$trDebit,
    	]);
    }

    public function FarmerProfile()
    {   $id=session('id_of_user');
    	$farmer_data=Registration::join('farmerdetails', 'registration.user_id', '=', 'farmerdetails.user_id')
            ->select()
        	->where('registration.user_id',$id)
        	->where('farmerdetails.user_id',$id)
            ->get();

   
    	return view('farmer.farmerDashboardProfile',[
    		'user_id'=>$id,
    		'fp'=>$farmer_data[0],
    	]);
    }


    public function FarmerDownload($plant_id,$id,$coll_id)
    {
        
        $user_data=Registration::all()->where('user_id',$id)->first();
        $society_data=Registration::all()->where('user_id',$user_data['society_id'])->first();
        $coll_data=Farmermilkcollection::all()->where('collectionId',$coll_id)->first();

        $coll_date=explode(' ',$coll_data['updated_at'])[0];
        $coll_time=explode(':',explode(' ',$coll_data['updated_at'])[1])[0];
        $shift="Morning";
        if ($coll_time>=14) {
            $shift="Evening";
        }

      
       $pdf = App::make('dompdf.wrapper');
                   $x='
                   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                   <div class="my-2 container">
                    <h4 class="text-center pt-2"><strong>Manish Society</strong></h4>
                    <p class="text-center">Agarsanda Behara<br>'.$society_data["phone_number"].'</p>
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
                            <p ><strong>Collection Date:</strong>'.$coll_date.'
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
                                        <th>Rate</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>'.$coll_data['collectionId'].'</td>
                                        <td>'.$coll_data['milk_weight'].'</td>
                                        <td>'.$coll_data['milk_snf'].'</td> 
                                        <td>'.$coll_data['milk_clr'].'</td> 
                                        <td>'.$coll_data['milk_rate'].'</td>
                                        <td>'.$coll_data['milk_price'].'</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        </div>

                </div>';
                   $pdf->loadHTML($x);
                return $pdf->download('invoice.pdf');
                   //return $pdf->stream();
    }

    //------------------------ORDER LIST ----------------//

    public function FarmerOrderNew()
    {
        $id=session('id_of_user');
        $societyId=Registration::all()->where('user_id',$id)->pluck('society_id');
        $proList=Societystorage::all()->where('store_by_id',$societyId[0]);
        $users=Registration::all()->where('user_id',$id)->first();
        $add_product_count=Societysell::all()->where('consumer_id',$id)->where('order_status',0)->count();
        return view('farmer.newOrder',[
            'user'=>$users,
            'proList'=>$proList,
            'msg'=>0,
            'add_product_count'=>$add_product_count,

        ]);
            
    }
    public function ProductData()
    {

        $id=session('id_of_user');
        $storage_id=request('storage_id');
        $data=Societystorage::all()->where('storage_id',$storage_id)->first();
        $find_product=Societysell::all()->where('product_name',$data['product_name'])->where('consumer_id',$id)->where('order_status','0')->count();

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

         
         $add=new Societysell;
         $users=Registration::all()->where('user_id',$id)->first();
         $count=Societysell::all()->count();
            $add->cart_id='cart'.($count+1);

             $add->order_status='0';
             $add->sell_by=$users['society_id'];
             $add->consumer_id=$id;
             $add->consumer_name=$users['first_name'].' '.$users['mid_name'].' '.$users['last_name'];
             $add->product_name=$request->productName;
             $add->amount=$request->productCount;
             $add->price=$request->totalPrice;
             $x=$add->save();

        if($x){
            $users=Registration::all()->where('user_id',$id)->first();
            $proList=Societystorage::all()->where('store_by_id',$users['society_id']);
            $add_product_count=Societysell::all()->where('consumer_id',$id)->where('order_status',0)->count();
            return view('farmer.newOrder',[
                'user'=>$users,
                'proList'=>$proList,
                'msg'=>0,
                'add_product_count'=>$add_product_count,

            ]);
        }
         
     }
     public function CartTable()
     {
         $id=session('id_of_user');
         $proList=Societysell::all()->where('consumer_id',$id)->where('order_status','0');

         $html='';
         foreach ($proList as $pl) {
             $html.='<tr>
                        <td>'.$pl['product_name'].'</td>
                        <td>'.$pl['amount'].'</td>
                        <td>'.$pl['price'].'</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-secondary editProuct" data-toggle="modal" data-target=".editProductModel" value="'.$pl['cart_id'].'">Edit</button>
                                <button type="button" class="btn btn-secondary deleteProduct" value="'.$pl['cart_id'].'">Delete</button>
                            </div>
                        </td>
                    </tr>';

         }

         return $html;

     }
     public function FinalOrder()
     {
          $id=session('id_of_user');
          $count=Societysell::all()->count();
          $order_id='order'.($count+1);
          
          $x=DB::table('societysell')->where('consumer_id',$id)->where('order_status','0')->update(['order_id'=>$order_id,'order_status'=>'1']);
          
          return redirect()->route('farmer-order-list');
     }
    public function FarmerOrderList()
    {
        $id=session('id_of_user');
        $users=Registration::all()->where('user_id',$id)->first();
        $orderList=Societysell::all()->where('order_status','1')->where('consumer_id',$id)->groupBy('order_id');
        return view('farmer.orderList',[
            'user'=>$users,
            'sell_list'=>$orderList,
        ]);
    }

   

    //-----------------------END ORDER LIST-------------/
  
}

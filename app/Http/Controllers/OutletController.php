<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Create\Society;
use App\Models\Model\Create\Farmer;
use App\Models\Model\Create\Staff;
use App\Models\Model\Create\Vehicle;
use App\Models\Model\Create\Outletdetails;
use App\Models\Model\Create\Vehicleowner;
use App\Models\Model\Plant\Plantproducts;
use App\Models\Model\Society\Orderdetails;
use App\Models\Model\Society\Societystorage;
use App\Models\Model\Society\Societysell;
use App\Models\Test;
// use DataTables;
use DB;
use Validator;

class OutletController extends Controller
{
    public function Home($id)
    {
    	$userId=session('id_of_user');

    	$users=Registration::all()->where('user_id',$userId)->first();
    	$product_list=Societystorage::all()->where('store_by_id',$userId)->pluck('product_name');
    	return view('outlet.outletHome',[
    		'user'=>$users,
    		'user_id'=>$id,
    		'product_list'=>$product_list,
    	]);
    }

    public function NewOrder($id)
    {
    	$userId=session('id_of_user');
    	$users=Registration::all()->where('user_id',$userId)->first();
    	$productList=Plantproducts::all()->where('plant_id',$users['plant_id']);
    	$cart_product_count=Orderdetails::all()->where('order_by_id',$userId)->where('order_status','0')->count();
    	return view('outlet.newOrder',[
    		'user'=>$users,
    		'user_id'=>$id,
    		'product_list'=>$productList,
    		'add_product_count'=>$cart_product_count,
    		'msg'=>'0',
    	]);
    }

    public function ProductData()
     {
        $userId=session('id_of_user');
        $product_id=request('product_id');
        $data=Plantproducts::all()->where('product_id',$product_id)->first();

        $find_product=Orderdetails::all()->where('product_id',$product_id)->where('order_by_id',$userId)->where('order_status','0')->count();

        if($find_product){
            return ['data'=>'0'];
        }
        else{
            return ['data'=>$data];
        }

        
     }

     public function AddCart($id)
     {
     	 $userId=session('id_of_user');
       	 $users=Registration::all()->where('user_id',$userId)->first();
         $product=new Orderdetails;
         $product->plant_id=$users['plant_id'];

         $count=Orderdetails::all()->count();
         $product->cart_add_id='cart'.($count+1);

         $product->order_by_id=$userId;
         $product->order_by_work=$users['working_role'];

         $product->product_id=request('productId');
         $product->product_name=request('productName');
         $product->product_quantity=request('productCount');


         $product->sell_price_each=request('totalPrice')/request('productCount');

         $product->order_status='0';
         
        $x=$product->save();



        if($x){
            $productList=Plantproducts::all()->where('plant_id',$users['plant_id']);
            $cart_product_count=Orderdetails::all()->where('order_by_id',$userId)->where('order_status','0')->count();

            return view('outlet.newOrder',[
    		'user'=>$users,
    		'user_id'=>$id,
    		'product_list'=>$productList,
    		'add_product_count'=>$cart_product_count,
    		'msg'=>$product->product_name.' Is Added',
    	]);
        }
         
     }

     public function CartTable()
     {
     	 $userId=session('id_of_user');
         $proList=Orderdetails::all()->where('order_by_id',$userId)->where('order_status','0');

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

     public function FinalOrder($id)
     {
     	$userId=session('id_of_user');
     	$count=Orderdetails::all()->count();
        $order_id='order'.($count+1);
        
         $x=DB::table('orderdetails')->where('order_by_id',$userId)->where('order_status','0')->update(['order_id'=>$order_id,'order_status'=>'1']);

       return redirect()->route('outlet_order_list',[
       		'id'=>$id,
       ]);

     }

     public function OrderList($id)
     {
     	$userId=session('id_of_user');
     	$users=Registration::all()->where('user_id',$userId)->first();
         $orderList=Orderdetails::all()->where('order_by_id',$userId)->where('order_status','1')->groupBy('order_id');
   
         return view('outlet.orderList',[
         	'user_id'=>$id,
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
                $html2.='<button value="'.$orderId.'" class="btn btn-primary outlet_conform">Click</button>';
            }
            $html2.='</td></tr>';


        return ['html1'=>$html1,'html2'=>$html2];
     }

     public function OutletConformation()
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

//---------------------------Stock-----------------------------//
     public function StockList($id)
     {
     	$userId=session('id_of_user');
     	$users=Registration::all()->where('user_id',$userId)->first();
        $stockList=Societystorage::all()->where('store_by_id',$userId);
   
         return view('outlet.stockList',[
         	'user_id'=>$id,
            'user'=>$users,
            'stock_list'=>$stockList,
        ]);
     }
     public function StockData()
     {

     	$stockId=request('stock_id');

     	$data=Societystorage::all()->where('storage_id',$stockId)->first();
     	return $data;
     }
     public function UpdateStore($id)
     {
     	$storeId=request('storeId');
     	$updateData=[
     		'product_name'=>request('productName'),
     		'market_sell_price'=>request('unitPrice'),
     		'total_stock'=>request('totalStock'),
     	];

     	DB::table('societystorage')->where('storage_id',$storeId)->update($updateData);

     	$userId=session('id_of_user');
     	$users=Registration::all()->where('user_id',$userId)->first();
        $stockList=Societystorage::all()->where('store_by_id',$userId);
   
         return view('outlet.stockList',[
         	'user_id'=>$id,
            'user'=>$users,
            'stock_list'=>$stockList,
        ]);
     }

     public function AddInStockForm($id)
     {
     	$userId=session('id_of_user');
     	$users=Registration::all()->where('user_id',$userId)->first();
        $stockList=Societystorage::all()->where('store_by_id',$userId);
   
         return view('outlet.addStockForm',[
         	'user_id'=>$id,
            'user'=>$users,
            'stock_list'=>$stockList,
            'msg'=>'0',
            'color'=>'0',
        ]);
     }
     public function AddInStock($id)
     {
     	$userId=session('id_of_user');

     	$stock=new Societystorage;
     	$count=Societystorage::all()->count();
     	$stock->storage_id='storage'.($count+1);
     	$stock->store_by_id=$userId;
     	$stock->product_id='self'.($count+1);
     	$stock->product_name=request('productName');
     	$stock->product_unit=request('productUnit');
     	$stock->each_sell_price='0';
     	$stock->total_stock=request('productAmount');
     	$stock->market_sell_price=request('productPrice');

     	$check=Societystorage::all()->where('product_name',$stock->product_name)->where('store_by_id',$userId)->count();
     	$msg="";
     	if($check){
     		$msg="This Product Already In Store";
     		$color='red';
     	}else{
     		$stock->save();
     		$msg=$stock->product_name." Add In Store";
     		$color='green';
     	}
     	
     	$users=Registration::all()->where('user_id',$userId)->first();
        $stockList=Societystorage::all()->where('store_by_id',$userId);
         return view('outlet.addStockForm',[
         	'user_id'=>$id,
            'user'=>$users,
            'stock_list'=>$stockList,
            'msg'=>$msg,
            'color'=>$color,
        ]);
     }
//---------------------------End Of Stock----------------------//

//--------------------------------Product Sell ------------//
public function GetEmptyOrder()
{
	$userId=session('id_of_user');
	$emptyList=Societysell::all()->where('sell_by',$userId)->where('order_status',"0");

	$html='';
	if ($emptyList->count()) {

		$total_price=0;
		$customerName='';
		$customerId='';
		foreach ($emptyList as $el) {
			$html.='<tr>
			<td>'.$el['product_name'].'</td>
			<td>'.$el['amount'].'</td>
			<td>'.$el['price'].'</td>
			<td>
				<div class="btn-group" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-secondary editProduct" value="'.$el['cart_id'].'">Edit</button>
					<button type="button" class="btn btn-secondary deleteProduct" value="'.$el['cart_id'].'">Delete</button>
				</div>
			</td>
		</tr>';

		$total_price=$total_price+$el['price'];
		$customerName=$el['farmer_name'];
		$customerId=$el['farmer_id'];
		}

		return ['html'=>$html,'count'=>$emptyList->count(),'totalPrice'=>$total_price,'customerName'=>$customerName,'customerId'=>$customerId,];
	}
	return ['count'=>'0'];
	
}
public function ReSet()
{

	$userId=session('id_of_user');
	$emptyList=DB::table('societysell')->where('sell_by',$userId)->where('order_status',"0")->delete();
}
public function ProInfo()
{
	$proName=request('pro_name');

	$userId=session('id_of_user');
	$stockList=Societystorage::all()->where('store_by_id',$userId)->where('product_name',$proName)->first();
	return ['product_unit'=>$stockList['product_unit'],'each_sell_price'=>$stockList['market_sell_price'],'total_stock'=>$stockList['total_stock'],'stockId'=>$stockList['storage_id'],];
}
//--------------------------------End Product Sell ------------//
}





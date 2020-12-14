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

use DB;

class PlantProductController extends Controller
{
    public function AddNewProduct($id)
    {
    	$users=Registration::all()->where('user_id',$id)->first();

    	return view('plant.addNewProduct',[
     		'user'=>$users,
     	]);
    }

    public function AddProduct()
    {  
    	$data=request('data');
    	$product=new Plantproducts;
    	$product->plant_id='plant001';
    	$count=Plantproducts::all()->count();
    	$product->product_id='product'.($count+1);;
		
    	$product->product_name=$data['productName'];

    	$name=Plantproducts::all()->where('product_name',$data['productName'])->count();
    	if($name){
    		return 0;
    	}
    	$product->product_short_name=$data['shortProductName'];
    	$product->product_type=$data['productType'];
    	$product->product_unit=$data['productUnit'];
    	$product->product_stock=$data['productAmount'];
    	$product->product_price=$data['productPrice'];
    	$product->product_offer=$data['productOffer'];
    	$product->product_photo=$data['productPhoto'];

    	$x=$product->save();

    	if ($x){
    		return 1;
    	}
    }

    public function ProductList($id)
    {
    	$product=Plantproducts::all()->where('plant_id',$id);
    	$users=Registration::all()->where('user_id',$id)->first();
    	return view('plant.productList',[
     		'user'=>$users,
     		'product_list'=>$product,
     	]);
    }

    public function ProductData()
    {
    	$product_id=request('product_id');
    	$data=Plantproducts::all()->where('product_id',$product_id)->first();

    	return $data;
    }

    public function EditProduct()
    {
    	$update_data=[
		    	'product_name'=>request('productName'),
		    	'product_short_name'=>request('shortProductName'),
		    	'product_type'=>request('productType'),
		    	'product_unit'=>request('productUnit'),
		    	'product_stock'=>request('productAmount'),
		    	'product_price'=>request('productPrice'),
		    	'product_offer'=>request('productOffer'),
		    	'product_photo'=>request('productPhoto'),
    	];

    	$x=DB::table('plantproducts')
              ->where('product_id',request('productId'))
              ->update($update_data);

        if($x){

        	$id=session('id_of_user');
	    	return redirect()->route('plant.listofproduct',[
    			'id'=>$id
    		]);
        }
    
    }

    public function DeleteProduct()
    {
    		$product_id=request('d_productId');

		    $x=DB::table('plantproducts')->where('product_id',$product_id)->delete();

		    if($x){

        	$id=session('id_of_user');
	    	return redirect()->route('plant.listofproduct',[
    			'id'=>$id
    		]);
        }
    }

    public function AddAmount()
    {
    		$product_id=request('a_productId');
    		$old_stock=request('a_productAmount');
    		$add_stock=request('a_add_stock');

    		$total_stock=$old_stock+$add_stock;

		    $x=DB::table('plantproducts')
		    ->where('product_id',$product_id)
		    ->update(['product_stock'=>$total_stock]);

		    if($x){

        	$id=session('id_of_user');
    		return redirect()->route('plant.listofproduct',[
    			'id'=>$id
    		]);
        }
    }

    public function NewOrderList($id)
    {
        $newOrderList=Orderdetails::all()->where('plant_id',$id)->where('plant_status',"")->groupBy('order_id');
        $users=Registration::all()->where('user_id',$id)->first();

        return view('plant.newOrderList',[
            'user'=>$users,
            'new_order_list'=>$newOrderList,
        ]);
    }

    public function NewOrderListData()
    {
        $orderId=request('data');
        $orderData=Orderdetails::all()->where('order_id',$orderId)->where('plant_status',"");

        $html='';
        $totalPrice=0;
        foreach ($orderData as $sd) {
            $html.='<tr>
                        <td>'.$sd['product_id'].'</td>
                        <td>'.$sd['product_name'].'</td>
                        <td>'.$sd['product_quantity'].'</td>
                        <td>'.$sd['product_quantity']*$sd['sell_price_each'].'</td>
                    </tr>';
            $totalPrice+=$sd['product_quantity']*$sd['sell_price_each'];
        }

        return ['html'=>$html,'total'=>$totalPrice];

    }

    public function NewOrderConformation($id)
    {
       $order_id=request('orderId');
       $x=DB::table('orderdetails')
              ->where('order_id',$order_id)
              ->update(['plant_status'=>'1','vehicle_status'=>'1']);

        $newOrderList=Orderdetails::all()->where('plant_id',$id)->where('plant_status',"")->groupBy('order_id');
        $users=Registration::all()->where('user_id',$id)->first();

        return view('plant.newOrderList',[
            'user'=>$users,
            'new_order_list'=>$newOrderList,
        ]);
    }

    public function AllOrderList($id)
    {
        $allOrderList=Orderdetails::all()->where('plant_id',$id)->where('plant_status',"1")->groupBy('order_id');
        $users=Registration::all()->where('user_id',$id)->first();

        return view('plant.allOrderList',[
            'user'=>$users,
            'all_order_list'=>$allOrderList,
        ]);
    }

    public function OrderListData()
    {
        $orderId=request('data');
        $orderData=Orderdetails::all()->where('order_id',$orderId)->where('plant_status',"1");

        $html='';
        $totalPrice=0;
        foreach ($orderData as $sd) {
            $html.='<tr>
                        <td>'.$sd['product_id'].'</td>
                        <td>'.$sd['product_name'].'</td>
                        <td>'.$sd['product_quantity'].'</td>
                        <td>'.$sd['product_quantity']*$sd['sell_price_each'].'</td>
                    </tr>';
            $totalPrice+=$sd['product_quantity']*$sd['sell_price_each'];
        }

        return ['html'=>$html,'total'=>$totalPrice];
    }

}

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController as Icontroller;
use App\Http\Controllers\PlantController as Pcontroller;
use App\Http\Controllers\RootMasterController as RMcontroller;
use App\Http\Controllers\RateChartController as RCcontroller;
use App\Http\Controllers\PlantProductController as PPcontroller;

use App\Http\Controllers\Society\SocietyController as SCcontroller;

use App\Http\Controllers\MilkManagementController as MMCcontroller;
use App\Http\Controllers\FarmerController as FCcontroller;
use App\Http\Controllers\StaffController as SFCcontroller;

use App\Http\Controllers\PlantMilkManagementController as PMMCcontroller;
use App\Http\Controllers\TransactionController as TCcontroller;
use App\Http\Controllers\OutletController as OController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/pandey', [App\Http\Controllers\HomeController::class, 'pandey'])->name('pandey');



//------------------- Home -------------------------//

Route::group(['prefix'=>'/kubermilky'],function(){

	Route::GET('/index',[Icontroller::class, 'index'])->name('index');
	Route::GET('/contact',[Icontroller::class, 'contact'])->name('contact');
	Route::GET('/about',[Icontroller::class, 'about'])->name('about');

	Route::get('/login',[Icontroller::class, 'login'])->name('login');

	Route::post('/login',[Icontroller::class, 'loginVerification']);

});
//-------------------End Home -------------------------//

//--------------------- PLANT Work -----------------------//
Route::group(['prefix'=>'/kubermilky/plant'],function(){

	Route::GET('/home',[Pcontroller::class, 'home'])->name('plant.home');

//********************* Create All **********************************//
	
	Route::GET('/registration/{create_role}',[Pcontroller::class, 'registration'])->name('registration');
	Route::POST('/otpVerification/{create_role}',[Pcontroller::class, 'Otpverification'])->name('otpverification');
	Route::GET('/otpVerification/{create_role}',function(){
		return "Do Not Open This Page By Using Get Method";
	});

	Route::GET('/details/{create_role}',[Pcontroller::class, 'details'])->name('details');
	Route::POST('/{create_role}/details',[Pcontroller::class, 'sendDetails'])->name('senddetails');

	Route::GET('/detail/',[Pcontroller::class, 'privateVehicle'])->name('privatevehicle');
	Route::POST('/detail/',[Pcontroller::class, 'sendPrivateVehicleDetails'])->name('privatevehicledetails');


	Route::GET('/memberlist',[Pcontroller::class, 'MemberList'])->name('memberlist');
	Route::GET('/memberlist/all',[Pcontroller::class, 'allMembers'])->name('getallmembers');

	Route::GET('/details/submission/form',[Pcontroller::class, 'detailsSubmission'])->name('detailssubmission');
	Route::POST('/check/phone/number',[Pcontroller::class, 'checkPhoneNumber'])->name('checkphonenumber');



//**************************** ROOT MASTER **************************************///

	Route::GET('/rootmaster/create',[RMcontroller::class, 'rootMasterForm'])->name('newrootmasterform');
	Route::POST('/rootmaster/add',[RMcontroller::class, 'addRootMaster'])->name('addrootmaster');
	Route::GET('/rootmaster/list',[RMcontroller::class, 'rootMasterList'])->name('rootmasterlist');
	Route::DELETE('/rootmaster/list/{rootmasterid}',[RMcontroller::class, 'deleteRootMaster'])->name('deleterootmaster');

//********************************* END OF ROOT MASTER *****************************//

//*************************** Rate Chart *****************************************//

	Route::GET('/ratechart/new',[RCcontroller::class, 'rateChartForm'])->name('newratechartform');
	Route::POST('/ratechart/add',[RCcontroller::class, 'addRateChart'])->name('addratechart');
	Route::GET('/ratechart/list',[RCcontroller::class, 'rateChartList'])->name('ratechartlist');
	Route::POST('/ratechart/list',[RCcontroller::class, 'oneRateChartList'])->name('oneratechartlist');

	Route::POST('/check/formula',[RCcontroller::class, 'FormulaCheck'])->name('formulacheck');
//***********************************End of Rate Chart ********************************//


//********************************* START plant Milk Collection OR dISPATCH  *********//
	Route::GET('/milk/collection',[PMMCcontroller::class, 'milkCollection'])->name('plant.milk.collection');
	Route::POST('milk/collection/conformation',[PMMCcontroller::class, 'collectionConformation'])->name('plant.milk.collection.conformation');
	Route::POST('milk/collection/get/edit/data',[PMMCcontroller::class, 'collectionGetEditData'])->name('get.editing.data');
	Route::POST('milk/collection/edit/conformation',[PMMCcontroller::class, 'saveEditData'])->name('plant.milk.save.edit.data');
	

	Route::GET('/milk/collection/table',[PMMCcontroller::class, 'collectionTable'])->name('plant.milk.collection.table');
	Route::POST('/milk/collection/olddata',[PMMCcontroller::class, 'collectionTableOldData'])->name('plant.milk.collection.olddata');

//********************** END plant Milk Collection OR dISPATCH *********************//

//********************************* START plant Product Manegment  *********//
	Route::GET('/product/add',[PPcontroller::class, 'AddNewProduct'])->name('plant.addproduct');
	Route::POST('product/add',[PPcontroller::class, 'AddProduct'])->name('addproduct');

	Route::GET('/product/list',[PPcontroller::class, 'ProductList'])->name('plant.listofproduct');
	Route::POST('product/data',[PPcontroller::class, 'ProductData'])->name('plant.productdata');
	Route::POST('product/edit',[PPcontroller::class, 'EditProduct'])->name('plant.editproduct');
	Route::POST('product/amount/add',[PPcontroller::class, 'AddAmount'])->name('plant.addamount');
	Route::POST('product/delete',[PPcontroller::class, 'DeleteProduct'])->name('plant.deleteproduct');
	// Route::GET('{id}/product/{pro_id}',[PPcontroller::class, 'ProductDetails'])->name('plant.productdetails');

	Route::GET('/order/list/new',[PPcontroller::class, 'NewOrderList'])->name('plant.neworderlist');
	Route::POST('/order/list/new',[PPcontroller::class, 'NewOrderConformation'])->name('plant.neworderconf');
	Route::POST('neworderlist',[PPcontroller::class, 'NewOrderListData'])->name('plant.neworderlistdata');
	Route::GET('/order/list/all',[PPcontroller::class, 'AllOrderList'])->name('plant.allOrderList');
	Route::POST('orderlist',[PPcontroller::class, 'OrderListData'])->name('plant.orderlistdata');

//********************************* End plant Product Manegment  *********//

//********************************* START plant Transaction  Manegment  *********//
	Route::GET('/transaction/new',[TCcontroller::class, 'NewTransactionForm'])->name('plant-newTransaction');
	Route::POST('/transaction/new',[TCcontroller::class, 'AddTransaction'])->name('plant-addTransaction');
	Route::POST('getuserdata',[TCcontroller::class, 'GetUserData'])->name('plant-getUserData');

	Route::GET('/transaction/list',[TCcontroller::class, 'AllTransactionList'])->name('plant-allTransaction');
//********************************* End plant Transaction Manegment  *********//

	Route::GET('/logout',[Pcontroller::class, 'logout'])->name('plant.logout');

});

//---------------------END PLANT Work -----------------------//



//------------------------------Start  Society Work----------------------//

Route::group(['prefix'=>'/kubermilky/society'],function(){

Route::GET('/home',[SCcontroller::class, 'home'])->name('society.home');

Route::GET('/registration/',[SCcontroller::class, 'registration'])->name('society.registration');
Route::POST('/otpVerification/',[SCcontroller::class, 'otpverification'])->name('society.otpverification');
Route::GET('/otp/Verification/page/',[SCcontroller::class, 'otpVerificationPage'])->name('otpverificationpage');
Route::GET('/detail/',[SCcontroller::class, 'details'])->name('farmerdetails');
Route::POST('/details',[SCcontroller::class, 'sendDetails'])->name('society.senddetails');

Route::GET('/list/farmers',[SCcontroller::class, 'farmerList'])->name('society.farmerlist');
Route::GET('/farmers/{farmerId}',[SCcontroller::class, 'farmerProfile'])->name('society.farmerprofile');



Route::GET('/order/new',[SCcontroller::class, 'NewOrder'])->name('society.neworder');
Route::POST('society/product/data',[SCcontroller::class, 'ProductData'])->name('society.productdata');
Route::POST('/order/new',[SCcontroller::class, 'AddCart'])->name('society.addcart');
Route::POST('societycartlist',[SCcontroller::class, 'SocietyCartTable'])->name('society-cart-table');
Route::POST('/order/list',[SCcontroller::class, 'SocietyProductOrder'])->name('society-order-product');
Route::GET('/order/list',[SCcontroller::class, 'SocietyOrderTable'])->name('society-order-list');
Route::POST('orderproductdata',[SCcontroller::class, 'OrderProduclList'])->name('society-order-product-data');
Route::POST('societyconformation',[SCcontroller::class, 'SocietyConformation'])->name('society-order-conformation');


Route::GET('/sell/new',[SCcontroller::class, 'NewSell'])->name('society.newsell');
Route::POST('getcartdata',[SCcontroller::class, 'GetCartData'])->name('society-getcartdata');
Route::POST('getcarttable',[SCcontroller::class, 'GetCartTable'])->name('society-getcarttable');
Route::POST('getproductinformation',[SCcontroller::class, 'ProductInfo'])->name('society-product-info');
Route::POST('addproduct',[SCcontroller::class, 'AddProduct'])->name('society-add-product');
Route::POST('finalsell',[SCcontroller::class, 'FinalProductSell'])->name('society-final-sell');

Route::GET('/sell/list',[SCcontroller::class, 'ProductSellTable'])->name('society-sell-list');
Route::POST('sellproductdata',[SCcontroller::class, 'SellProduclList'])->name('society-sell-product-data');

Route::GET('/transaction/new',[SCcontroller::class, 'NewTransactionForm'])->name('society-newTransaction');
Route::POST('/transaction/new',[SCcontroller::class, 'AddTransaction'])->name('society-addTransaction');

Route::GET('/transaction/list',[SCcontroller::class, 'AllTransactionList'])->name('society-allTransaction');
});
//------------------------------END  Society Work ----------------------//




//-----------------------------------Farmer Work -------------------//

Route::group(['prefix'=>'/kubermilky/farmer'],function(){

	Route::GET('/home',[FCcontroller::class, 'FarmerHome'])->name('farmer.home');
	Route::POST('farmer/conformation',[FCcontroller::class, 'farmerConformation'])->name('farmer.conformation');
	Route::GET('/milk/list',[FCcontroller::class, 'MilkDataList'])->name('farmer.alldata');
	Route::GET('/transition/list',[FCcontroller::class, 'FarmerTransitionList'])->name('farmer.transition');
	Route::POST('/transition/list',[FCcontroller::class, 'FarmerTransitionListYear'])->name('farmer.transition-year');
	Route::GET('/profile',[FCcontroller::class, 'FarmerProfile'])->name('farmer.profile');
	Route::GET('/download/{coll_id}',[FCcontroller::class, 'FarmerDownload'])->name('farmer.download');

	Route::GET('/order/new',[FCcontroller::class, 'FarmerOrderNew'])->name('farmer-order-new');
	Route::POST('productdata',[FCcontroller::class, 'ProductData'])->name('farmer.productdata');
	Route::POST('/order/new',[FCcontroller::class, 'AddCart'])->name('farmer.addToCart');
	Route::POST('cart/table',[FCcontroller::class, 'CartTable'])->name('farmer.cartTable');
	Route::POST('finalorder',[FCcontroller::class, 'FinalOrder'])->name('farmer.finalorder');

	Route::GET('/order/list',[FCcontroller::class, 'FarmerOrderList'])->name('farmer-order-list');
});

//----------------------------------- END Farmer Work -------------------//

//-------------------------Start milk collecton  society-----------------------//

Route::group(['prefix'=>'/kubermilky/milk/management'],function(){

Route::GET('collection/',[MMCcontroller::class, 'milkCollectionForm'])->name('milkcollection');
Route::GET('collection/table',[MMCcontroller::class, 'milkCollectionTable'])->name('milkcollectiontable');
Route::POST('getfarmerdata',[MMCcontroller::class, 'getFarmerData'])->name('getfarmerdata');
Route::POST('store/milk/',[MMCcontroller::class, 'storeMilkData'])->name('milkstore');

Route::GET('dispatch/',[MMCcontroller::class, 'milkDispatchForm'])->name('milkdispatchform');
Route::POST('dispatch/',[MMCcontroller::class, 'milkDispatch'])->name('milkdispatch');

Route::GET('dispatch/list/',[MMCcontroller::class, 'milkDispatchList'])->name('milkdispatchlist');
Route::POST('final/data',[MMCcontroller::class, 'plantFinalData'])->name('plantfinaldata');

Route::GET('/download/vehicle/',[MMCcontroller::class, 'DownloadVehicleInvoice'])->name('downloadvehicleinvoice');
Route::GET('/download/collecter/',[MMCcontroller::class, 'DownloadCollecterInvoice'])->name('downloadcollecterinvoice');

	});
//-------------------------END milk collecton -----------------------//



//------------------------------- START STAFF URL ------------------//

Route::group(['prefix'=>'/kubermilky/plant'],function(){

Route::GET('/{plantId}/staff/{id}/home',[SFCcontroller::class,'home'])->name('staff.home');
Route::GET('{plantId}/staff/{id}/transaction',[SFCcontroller::class, 'staffTransaction'])->name('staff.transaction');
Route::GET('{plantId}/staff/{id}/vehicle/details',[SFCcontroller::class, 'vehicleDetails'])->name('staff.vehicledetails');
Route::POST('vehicle/conformation',[SFCcontroller::class, 'vConformation'])->name('vehicle.conformation');

Route::GET('{plantId}/staff/{id}/notifiction',[SFCcontroller::class, 'Notification'])->name('staff.notification');
Route::GET('{plantId}/staff/{id}/profile',[SFCcontroller::class, 'staffProfile'])->name('staff.profile');

	});

//------------------------------- END STAFF URL ------------------//

//------------------------------- START OUTLET URL ------------------//
Route::group(['prefix'=>'/kubermilky/outlet'],function(){
	Route::GET('/{id}/home',[OController::class,'Home'])->name('outlet_home');
	Route::GET('/{id}/order/new',[OController::class,'NewOrder'])->name('outlet_new_order');
	Route::POST('getProductData',[OController::class,'ProductData'])->name('outlet_getProductData');
	Route::POST('{id}/order/new',[OController::class, 'AddCart'])->name('outlet_addcart');
	Route::POST('outletCartTable',[OController::class, 'CartTable'])->name('outlet_cart_table');
	Route::POST('{id}/order/list',[OController::class, 'FinalOrder'])->name('outlet_final_order');
	Route::GET('{id}/order/list',[OController::class, 'OrderList'])->name('outlet_order_list');
	Route::POST('outlet-order-product-data',[OController::class, 'OrderProduclList'])->name('outlet_order_product_data');
	Route::POST('outlet-order-conformation',[OController::class, 'OutletConformation'])->name('outlet_order_conformation');

	Route::GET('{id}/stock/list',[OController::class, 'StockList'])->name('outlet_stock_list');
	Route::POST('getStockDetails',[OController::class, 'StockData'])->name('get_stock_details');
	Route::POST('{id}/stock/list',[OController::class, 'UpdateStore'])->name('update_store');

	Route::GET('{id}/stock/add',[OController::class, 'AddInStockForm'])->name('outlet_add_stock_form');
	Route::POST('{id}/stock/add',[OController::class, 'AddInStock'])->name('outlet_add_stock');

	Route::POST('getEmptyOrder',[OController::class, 'GetEmptyOrder'])->name('get_empty_order');
	Route::POST('resetEmpty',[OController::class, 'ReSet'])->name('reset_empty');
	Route::POST('proInfo',[OController::class, 'ProInfo'])->name('outlet_pro_info');
});


//------------------------------- END OUTLET URL ------------------//


//------------------------ Other Url-----------------------------------//

Route::any('', function(){

	return "no page";
});
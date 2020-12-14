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

	Route::GET('/{id}/home',[Pcontroller::class, 'home'])->name('plant.home');

//********************* Create All **********************************//
	
	Route::GET('/{id}/registration/{role}',[Pcontroller::class, 'registration'])->name('registration');
	Route::POST('/{id}/otpVerification/{role}',[Pcontroller::class, 'otpverification'])->name('otpverification');

	Route::GET('/{id}/details/{role}',[Pcontroller::class, 'details'])->name('details');
	Route::POST('/{role}/details',[Pcontroller::class, 'sendDetails'])->name('senddetails');

	Route::GET('/{id}/detail/{role}',[Pcontroller::class, 'privateVehicle'])->name('privatevehicle');
	Route::POST('/{id}/detail/{role}',[Pcontroller::class, 'sendPrivateVehicleDetails'])->name('privatevehicledetails');


	Route::GET('/{id}/memberlist',[Pcontroller::class, 'memberList'])->name('memberlist');
	Route::GET('/memberlist/all',[Pcontroller::class, 'allMembers'])->name('getallmembers');

	Route::GET('{id}/details/submission/form',[Pcontroller::class, 'detailsSubmission'])->name('detailssubmission');
	Route::POST('{id}/check/phone/number',[Pcontroller::class, 'checkPhoneNumber'])->name('checkphonenumber');



//**************************** ROOT MASTER **************************************///

	Route::GET('{id}/rootmaster/create',[RMcontroller::class, 'rootMasterForm'])->name('newrootmasterform');
	Route::POST('{id}/rootmaster/add',[RMcontroller::class, 'addRootMaster'])->name('addrootmaster');
	Route::GET('{id}/rootmaster/list',[RMcontroller::class, 'rootMasterList'])->name('rootmasterlist');
	Route::DELETE('{id}/rootmaster/list/{rootmasterid}',[RMcontroller::class, 'deleteRootMaster'])->name('deleterootmaster');

//********************************* END OF ROOT MASTER *****************************//

//*************************** Rate Chart *****************************************//

	Route::GET('{id}/ratechart/new',[RCcontroller::class, 'rateChartForm'])->name('newratechartform');
	Route::POST('{id}/ratechart/add',[RCcontroller::class, 'addRateChart'])->name('addratechart');
	Route::GET('{id}/ratechart/list',[RCcontroller::class, 'rateChartList'])->name('ratechartlist');
	Route::POST('/ratechart/list',[RCcontroller::class, 'oneRateChartList'])->name('oneratechartlist');

	Route::POST('/check/formula',[RCcontroller::class, 'FormulaCheck'])->name('formulacheck');
//***********************************End of Rate Chart ********************************//


//********************************* START plant Milk Collection OR dISPATCH  *********//
	Route::GET('{id}/milk/collection',[PMMCcontroller::class, 'milkCollection'])->name('plant.milk.collection');
	Route::POST('milk/collection/conformation',[PMMCcontroller::class, 'collectionConformation'])->name('plant.milk.collection.conformation');
	Route::POST('milk/collection/get/edit/data',[PMMCcontroller::class, 'collectionGetEditData'])->name('get.editing.data');
	Route::POST('milk/collection/edit/conformation',[PMMCcontroller::class, 'saveEditData'])->name('plant.milk.save.edit.data');
	

	Route::GET('{id}/milk/collection/table',[PMMCcontroller::class, 'collectionTable'])->name('plant.milk.collection.table');
	Route::POST('/milk/collection/olddata',[PMMCcontroller::class, 'collectionTableOldData'])->name('plant.milk.collection.olddata');

//********************** END plant Milk Collection OR dISPATCH *********************//

//********************************* START plant Product Manegment  *********//
	Route::GET('{id}/product/add',[PPcontroller::class, 'AddNewProduct'])->name('plant.addproduct');
	Route::POST('product/add',[PPcontroller::class, 'AddProduct'])->name('addproduct');

	Route::GET('{id}/product/list',[PPcontroller::class, 'ProductList'])->name('plant.listofproduct');
	Route::POST('product/data',[PPcontroller::class, 'ProductData'])->name('plant.productdata');
	Route::POST('product/edit',[PPcontroller::class, 'EditProduct'])->name('plant.editproduct');
	Route::POST('product/amount/add',[PPcontroller::class, 'AddAmount'])->name('plant.addamount');
	Route::POST('product/delete',[PPcontroller::class, 'DeleteProduct'])->name('plant.deleteproduct');
	// Route::GET('{id}/product/{pro_id}',[PPcontroller::class, 'ProductDetails'])->name('plant.productdetails');

	Route::GET('{id}/order/list/new',[PPcontroller::class, 'NewOrderList'])->name('plant.neworderlist');
	Route::POST('{id}/order/list/new',[PPcontroller::class, 'NewOrderConformation'])->name('plant.neworderconf');
	Route::POST('neworderlist',[PPcontroller::class, 'NewOrderListData'])->name('plant.neworderlistdata');
	Route::GET('{id}/order/list/all',[PPcontroller::class, 'AllOrderList'])->name('plant.allOrderList');
	Route::POST('orderlist',[PPcontroller::class, 'OrderListData'])->name('plant.orderlistdata');

//********************************* End plant Product Manegment  *********//

	Route::GET('/{id}/logout',[Pcontroller::class, 'logout'])->name('plant.logout');
});

//---------------------END PLANT Work -----------------------//


//------------------------------Start  Society Work----------------------//

Route::group(['prefix'=>'/kubermilky/society'],function(){

Route::GET('/{id}/home',[SCcontroller::class, 'home'])->name('society.home');

Route::GET('/{id}/registration/{role}',[SCcontroller::class, 'registration'])->name('society.registration');
Route::POST('/{id}/otpVerification/{role}',[SCcontroller::class, 'otpverification'])->name('society.otpverification');
Route::GET('{id}/otp/Verification/page/{role}',[SCcontroller::class, 'otpVerificationPage'])->name('otpverificationpage');
Route::GET('/{id}/detail/{role}',[SCcontroller::class, 'details'])->name('farmerdetails');
Route::POST('/{role}/details',[SCcontroller::class, 'sendDetails'])->name('society.senddetails');

Route::GET('{id}/list/farmers',[SCcontroller::class, 'farmerList'])->name('society.farmerlist');
Route::GET('{id}/farmers/{farmerId}',[SCcontroller::class, 'farmerProfile'])->name('society.farmerprofile');



Route::GET('{id}/order/new',[SCcontroller::class, 'NewOrder'])->name('society.neworder');
Route::POST('society/product/data',[SCcontroller::class, 'ProductData'])->name('society.productdata');
Route::POST('{id}/order/new',[SCcontroller::class, 'AddCart'])->name('society.addcart');
Route::POST('societycartlist',[SCcontroller::class, 'SocietyCartTable'])->name('society-cart-table');
Route::POST('{id}/order/list',[SCcontroller::class, 'SocietyProductOrder'])->name('society-order-product');
Route::GET('{id}/order/list',[SCcontroller::class, 'SocietyOrderTable'])->name('society-order-list');
Route::POST('orderproductdata',[SCcontroller::class, 'OrderProduclList'])->name('society-order-product-data');
Route::POST('societyconformation',[SCcontroller::class, 'SocietyConformation'])->name('society-order-conformation');


Route::GET('{id}/sell/new',[SCcontroller::class, 'NewSell'])->name('society.newsell');
Route::POST('getcartdata',[SCcontroller::class, 'GetCartData'])->name('society-getcartdata');
Route::POST('getcarttable',[SCcontroller::class, 'GetCartTable'])->name('society-getcarttable');
Route::POST('getproductinformation',[SCcontroller::class, 'ProductInfo'])->name('society-product-info');
Route::POST('addproduct',[SCcontroller::class, 'AddProduct'])->name('society-add-product');
Route::POST('finalsell',[SCcontroller::class, 'FinalProductSell'])->name('society-final-sell');

Route::GET('{id}/sell/list',[SCcontroller::class, 'ProductSellTable'])->name('society-sell-list');
Route::POST('sellproductdata',[SCcontroller::class, 'SellProduclList'])->name('society-sell-product-data');
});
//------------------------------END  Society Work ----------------------//




//-----------------------------------Farmer Work -------------------//

Route::group(['prefix'=>'/kubermilky/farmer'],function(){

	Route::GET('{id}/home',[FCcontroller::class, 'FarmerHome'])->name('farmer.home');
	Route::POST('farmer/conformation',[FCcontroller::class, 'farmerConformation'])->name('farmer.conformation');
	Route::GET('{plantId}/{id}/milk/list',[FCcontroller::class, 'MilkDataList'])->name('farmer.alldata');
	Route::GET('{plantId}/{id}/transition/list',[FCcontroller::class, 'FarmerTransitionList'])->name('farmer.transition');
	Route::GET('{plantId}/{id}/profile',[FCcontroller::class, 'FarmerProfile'])->name('farmer.profile');
	Route::GET('{plantId}/{id}/download/{coll_id}',[FCcontroller::class, 'FarmerDownload'])->name('farmer.download');

	Route::GET('{plantId}/{id}/order/list',[FCcontroller::class, 'FarmerOrderList'])->name('farmer-order-list');
});

//----------------------------------- END Farmer Work -------------------//

//-------------------------Start milk collecton  society-----------------------//

Route::group(['prefix'=>'/kubermilky/milk/management'],function(){

Route::GET('collection/{role1}/to/{role2}/{id}',[MMCcontroller::class, 'milkCollectionForm'])->name('milkcollection');
Route::GET('collection/{id}/table',[MMCcontroller::class, 'milkCollectionTable'])->name('milkcollectiontable');
Route::POST('getfarmerdata',[MMCcontroller::class, 'getFarmerData'])->name('getfarmerdata');
Route::POST('store/milk/',[MMCcontroller::class, 'storeMilkData'])->name('milkstore');

Route::GET('dispatch/{role}/{id}',[MMCcontroller::class, 'milkDispatchForm'])->name('milkdispatchform');
Route::POST('dispatch/{role}/{id}',[MMCcontroller::class, 'milkDispatch'])->name('milkdispatch');

Route::GET('dispatch/list/{role}/{id}',[MMCcontroller::class, 'milkDispatchList'])->name('milkdispatchlist');
Route::POST('final/data',[MMCcontroller::class, 'plantFinalData'])->name('plantfinaldata');

Route::GET('{id}/download/vehicle/{vehicleId}/{dispatchId}',[MMCcontroller::class, 'DownloadVehicleInvoice'])->name('downloadvehicleinvoice');
Route::GET('{id}/download/collecter/{collecterId}/{dispatchId}',[MMCcontroller::class, 'DownloadCollecterInvoice'])->name('downloadcollecterinvoice');

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



//------------------------ Other Url-----------------------------------//

Route::any('', function(){

	return "no page";
});
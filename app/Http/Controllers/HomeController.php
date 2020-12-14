<?php

namespace App\Http\Controllers;
use App\Http\Resources\Dairy\DairyUser;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    
    public function index()
    {
        // return new DairyUser(ModelsUser::all());
         // return DairyUser::collection(ModelsUser::paginate(10));

        // $x=ModelsUser::value('email');

        //$x=DB::table('users')->where('f_name', 'Kelly McClure')->value('email');
         // return $x;
          // $x=DB::table('users')->pluck('email');

        // $x=DB::table('users')->orderBy('id')->chunk(10, function ($users) {
        //     foreach ($users as $user) {
        //         dd($users);
        //     }
        // });


        // $x=DB::table('users')->select('l_name as first_name', 'email as user_email')->get();

        // $x=DB::table('users')
        //         ->select('plant_id','f_name as first_name', 'l_name as last_name')
        //         ->groupByRaw('plant_id,f_name, last_name')
        //         ->get();
              
        // $x=DB::table('users')->orderBy('id')->chunk(10, function ($users) {
        //     foreach ($users as $user) {

        //         dd($user);
        //     }
        // });
        //return $x;

        $x=DB::table('users')->simplePaginate(15);
        $x->withPath('custom/url');

        return $x;
          
    }
}

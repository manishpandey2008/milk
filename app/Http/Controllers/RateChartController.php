<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Model\Create\Society;
use App\Models\Model\Create\Farmer;
use App\Models\Model\Create\Staff;
use App\Models\Model\Create\Vehicle;
use App\Models\Model\Create\Vehicleowner;
use App\Models\Model\Plant\RateChartData;
use App\Models\Model\Plant\Ratechartformula;
use DB;
class RateChartController extends Controller
{

	public function rateChartForm(){
      $work=session('role_of_work');
      $id=session('id_of_user');
    	$users=Registration::all()->where('user_id',$id)->first();
    	return view('plant.rateChartForm',[
    		'user'=>$users,
    		'user_id'=>$id,
            'error'=>0,
    	]);
    }

    public function addRateChart($id){

        $rateChart=new Ratechartformula;
        $users=Registration::all()->where('user_id',$id);

        

        $count=RateChartData::all()->where('plant_id',$id)->where('chatCategory',request('chatCategory'))->count();
        if($count){
            $error="This Category Of Rate Chart Is Available";
            return view('plant.rateChartForm',[
                'users'=>$users,
                'user_id'=>$id,
                'error'=>$error,
            ]);
        }

        $rateChart->cartFormula=request('cartFormula');
        $rateChart->minOfX=request('minOfX');
        $rateChart->maxOfX=request('maxOfX');
        $rateChart->diffOfX=request('diffOfX');
        $rateChart->minOfY=request('minOfY');
        $rateChart->maxOfY=request('maxOfY');
        $rateChart->diffOfY=request('diffOfY');

        $rateChart->save();
        return redirect()->route('ratechartlist',[
                                  'id'=>$id,
                                ]);

    }
    public function rateChartList($id){
         $users=Registration::all()->where('user_id',$id);
         $chartList= RateChartData::all()->where('plant_id',$id)->pluck('chatCategory');
        return view('plant.rateChartList',[
                'users'=>$users,
                'user_id'=>$id,
                'chartList'=>$chartList,
            ]);
    }

    public function oneRateChartList()
    {

       $rateChart=request('data');
       $formula=DB::table('ratechartformula')
                ->where('plant_id','plant001')
                ->where('category',$rateChart)
                ->pluck('formula');
        $range=RateChartData::all()
                ->where('chatCategory',$rateChart);
               
        foreach ($range as $rn) {
           $minOfX=$rn['minOfX'];
           $maxOfX=$rn['maxOfX'];
           $diffOfX=$rn['diffOfX'];

           $minOfY=$rn['minOfY'];
           $maxOfY=$rn['maxOfY'];
           $diffOfY=$rn['diffOfY'];
        }

        $y="";
        $z="";

            for($i=$minOfX;$i<$maxOfX;$i=$i+$diffOfX)
                {
                  $y.= '<th scope="col">'.$i.'</th>';
                }
 
            for($j=$minOfY;$j<$maxOfY;$j=$j+$diffOfY)
            {

              $z.=  '<tr><th scope="col">'.$j.'</th>';
         
                for($i=$minOfX;$i<$maxOfX;$i=$i+$diffOfX)
                {
                      if ($rateChart=='a') {
                        $z.='<td>'.(2*$i+$j).'</td>';
                      }
                      else if ($rateChart=='b') {
                        $z.='<td>'.(2*$i+$j+2).'</td>';
                      }
                      else if ($rateChart=='c') {
                        $z.='<td>'.(2*$i+$j+4).'</td>';
                      }
                }
              $z.='</tr>';
             }
               


     $x='   <table class="table table-responsive-xl text-center table-bordered table-hover ">
            <thead>
                <tr>
                     <th scope="col">S/F</th>
                     '.
                     $y
                  .' </tr>
            </thead>
            <tbody>'.
                $z
            
           .' </tbody>
        </table>';

 return $x;  
    }

      public function FormulaCheck()
      {
        $formula=request('data');
        $x=preg_split("/(,?\s+)|((?<=[A-B])(?<=\d))|((?<=\d)(?=[A-B]))|((?<=[()\/*+-])(?<=\d))|((?<=\d)(?<=[()\/*+-]))|((?<=[A-B])(?<=[()\/*+-]))|((?<=[()\/*+-])(?<=[A-B]))/i", $formula);

        //$x=

        // $x=preg_split("/(,?\s+)|((?<=[A-B])(?=\d))|((?=\d)(?<=[A-B]))|(-?\d+|(?<=[()\/*+-]))/i", $formula);

        return $x;
      }
      
}

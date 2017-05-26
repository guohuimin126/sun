<?php

namespace App\Http\Controllers\Home;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
class InvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date=Carbon::yesterday();
        $rate=DB::table('deposit_rate')->where('rate_date', $date)->value('rate');
        return view('home.invest.invest',['rate'=>$rate]);
    }
    /**
     * Sun 存宝 存款成功 同步*/
    public function returns(){
        $status=isset($_GET['is_success'])?$_GET['is_success']:'T';
        if($status=='T'){
            $money=isset($_GET['total_fee'])?$_GET['total_fee']:1000;
            $time=Carbon::now();
            $detial=$time.'存入Sun 存宝'.$money.'元人名币';
            $re1=DB::insert("insert into sun_deposit (`id`, `u_id`,`money`,`earnings`,`total_money`) values (null,'1','$money',0,'$money')", [1, 'Dayle']);
            $re2=DB::insert("insert into sun_deposit_record (`u_id`, `rate`,`date`,`new_money`,`earning`,`detail`) values (1,0,'$time',$money,0,'$detial')", [1, 'Dayle']);
            if($re1&&$re2){
                return view('home.invest.invest');
            }
        }else{
            echo 'no';
        }
    }
     /**
      * Sun 存宝 存款成功 异步*/
    public function notify(){
        $post=isset($_POST)?$_POST:'no';
        $content=serialize($post);
        file_put_contents('./test.php',$content);
    }


}

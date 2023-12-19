<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $date_today = date("Y-m-d");
        $sales_today = DB::table('sells')
        ->join('products','sells.product_id','=','products.id')
        ->whereDate('sells.created_at','=',$date_today)
        ->selectRaw('sum(sells.amount * products.unit_price) as revenue_today')
        ->first();


        $yesterday = date("Y-m-d",strtotime("-1 days"));
        $sales_yesterday = DB::table('sells')
        ->join('products','sells.product_id','=','products.id')
        ->whereDate('sells.created_at','=',$yesterday)
        ->selectRaw('sum(sells.amount * products.unit_price) as revenue_yesterday')
        ->first();


        $sales_this_month = DB::table('sells')
        ->join('products','sells.product_id','=','products.id')
        ->whereYear('sells.created_at','=',date("Y"))
        ->whereMonth('sells.created_at','=',date('m'))
        ->selectRaw('sum(sells.amount * products.unit_price) as revenue_this_month')
        ->first();
        


        
        $sales_last_month = DB::table('sells')
        ->join('products','sells.product_id','=','products.id')
        ->whereYear('sells.created_at','=',date("Y"))
        ->whereMonth('sells.created_at','=',date("m",strtotime("-1 months")))
        ->selectRaw('sum(sells.amount * products.unit_price) as revenue_last_month')
        ->first();
        



        
        //return ($sales_today);
        return view('home', 
        [
            'sales_today'=> $sales_today,
            'sales_yesterday'=> $sales_yesterday,
            'sales_this_month'=> $sales_this_month,
            'sales_last_month'=> $sales_last_month

        ]);
    }
}

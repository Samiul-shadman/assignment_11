<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SellsController extends Controller
{
    public function index(){
        $sales = DB::table('sells')
        ->join('products', 'sells.product_id', '=', 'products.id')
        ->select('products.name as name', 'products.unit_price as unit_price', 
        'sells.id as id', 'sells.amount as sale_amount' , 'sells.created_at as sale_date')
        ->get();
        //return $sales;
        return view('store.sales_history', ['sales' => $sales]);
    }

}

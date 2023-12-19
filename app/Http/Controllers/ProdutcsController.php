<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProdutcsController extends Controller
{
    public function index(){
        $products = DB::table('products')->get();
        return view('store.products', ['products' => $products]);
    }

    public function add(){
        return view ('store.add_product');
    }

    public function store(Request $request){
        DB::table('products')
        ->insert([
            'name' => $request->name,
            'amount' => $request->amount,
            'unit_price' => $request->unit_price
        ]);

        //return $request;
        return redirect('products');
    }

    public function update($id){
        $data = DB::table('products')->find($id);
        return view ('store.update_product', ['data' => $data]);
    }

    public function store_update(Request $request){
        $id = $request->id;

        $update_data = DB::table('products')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'amount' => $request->amount,
            'unit_price' => $request->unit_price
        ]);

        return redirect('products');

    }

    public function sell($id){
        $data = DB::table('products')->find($id);
        return view ('store.sell_product', ['data' => $data]);
    }

    public function save_sell(Request $request){
        
        DB::table('products')
        ->where('id', '=', $request->id)
        ->update([
            'amount' => $request->amount - $request->sell_amount
        ]);

        DB::table('sells')
        ->insert([
            'product_id' => $request->id,
            'amount' => $request->sell_amount
        ]);

        return redirect('products');
    }

    
}

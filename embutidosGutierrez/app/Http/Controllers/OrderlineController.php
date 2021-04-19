<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderline;

class OrderlineController extends Controller
{
    public function showAll(){
        $orderlines = Orderline::All();
        return view('orderlines/orderlinesIndex', compact('orderlines'));
    }

    public function showOrderLine($id){
        $orderline = Orderline::findOrfail($id);
        return view('orderlines/orderlinesShow', ['orderline' => $orderline]);
    }

    public function deleteOrderline($id){
        $orderline = Orderline::find($id);
        $orderline -> delete();
        return redirect()->route('orderlines.showOrderlines');   

    }

}

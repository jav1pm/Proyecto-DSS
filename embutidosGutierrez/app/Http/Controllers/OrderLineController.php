<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderLine;

class OrderLineController extends Controller
{
    public function showAll(){
        $orderlines = OrderLine::All();
        return view('orderlines/orderlinesIndex', compact('orderlines'));
    }
    public function showOrderLine($id){
        $orderline = OrderLine::findOrfail($id);
        return view('orderlines/orderlinesShow', ['orderline' => $orderline]);
    }
}

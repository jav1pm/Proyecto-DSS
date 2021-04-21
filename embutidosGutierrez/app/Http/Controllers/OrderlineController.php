<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderline;

class OrderlineController extends Controller
{
    public function showAll(Request $request){
        $aids = $request->get('ordenarOrderlines');
        if(!$aids)
        {
            $aids = 'id';
        }
        $orderlines = Orderline::orderBy($iaids,'asc')->paginate(5);
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

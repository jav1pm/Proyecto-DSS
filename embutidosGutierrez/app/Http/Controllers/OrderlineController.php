<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderline;

class OrderlineController extends Controller
{
    public function showAll(Request $request){
        $res = $request->get('ordenarOrderlines');
        if(!$res)
        {
            $res = 'id';
        }
        $orderlines = Orderline::orderBy($res,'asc')->paginate(5);
        return view('orderlines/orderlinesIndex', compact('orderlines'));
    }

    public function showOrderLine($id){
        $orderline = Orderline::find($id);
        if(!$orderline)
        {
            return view('notFound');
        }
        return view('orderlines/orderlinesShow', ['orderline' => $orderline]);
    }

    public function deleteOrderline($id){
        $orderline = Orderline::find($id);
        $orderline -> delete();
        return redirect()->route('orderlines.showOrderlines');   

    }

}

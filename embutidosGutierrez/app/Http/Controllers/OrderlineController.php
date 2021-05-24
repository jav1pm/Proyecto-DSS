<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderline;
use App\Order;
use Illuminate\Support\Facades\Auth;

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

    public function deleteOrderlineClient($id){
        $orderline = Orderline::find($id);
        $orderline -> delete();
        return redirect()->route('cliente.carrito');   
    }

    public function showCarrito(){
        
        $user = Auth::user()->orders;
        if ($user) { //Control de usuario
            $userOrders = Auth::user()->orders;
            foreach($userOrders as $carrito){
                if($carrito->estado == "carrito") { //Existe el carrito con productos
    
                    $precioTotal = $carrito->calculaPrecioPedido();
                    $orderlines = $carrito->Orderlines;
                    return view('cliente.carrito', compact('orderlines', 'precioTotal'));
                } 
            }

            $precioTotal = 0;
            $orderlines = collect();
            return view('cliente.carrito', compact('orderlines', 'precioTotal'));
        }
        
        return redirect()->route('casa'); 
    }
}

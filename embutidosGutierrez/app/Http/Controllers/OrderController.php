<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function showAll(Request $request){
        $res = $request->get('ordenarOrder');
        if(!$res)
        {
            $res = 'id';
        }
        $orders = Order::orderBy($res,'asc')->paginate(5);
        return view('orders/ordersIndex', compact('orders'));
    }

    public function showForClient(Request $request){//controlador de pedidos del clienet
        $res = $request->get('ordenarOrder');
        if(!$res)
        {
            $res = 'fecha';
        }
        $orders = Order::orderBy($res,'desc')->paginate(2);
        return view('orders/orderClient', compact('orders'));
    }

    public function showOrder($id){
        $order = Order::find($id);
        if(!$order)
        {
            return view('notFound');
        }
        return view('orders/ordersShow', ['order' => $order]);
    }
    
    public function createOrder(){
        return view('orders/ordersCreate');
    }

    public function storeOrder(){

        request()->validate([
            'date' => 'required',
            'estado' => 'required',
            'direccion' => 'required|numeric',
            'pago' => 'required',
            'usuario' => 'required'
        ]);

        Order::create([

            'fecha' => request('fecha'),
            'estado' => request('estado'),
            'direccion' => request('direccion'),
            'pago' => request('pago'),
            'user_id' => intval(request('usuario')),

        ]);

        return redirect()->route('orders.showOrders');

    }

    public function editOrder($id){
        $order = Order::findOrfail($id);

        return view('orders/ordersEdit', [
            'order' => $order
        ]);
    }

    public function updateOrder(Order $order){

        request()->validate([
            'date' => 'required',
            'estado' => 'required',
            'direccion' => 'required|numeric',
            'pago' => 'required',
        ]);

        $order->update([
            'fecha' => request('fecha'),
            'estado' => request('estado'),
            'direccion' => request('direccion'),
            'pago' => request('pago'),
        ]);

        return redirect() -> route('orders.showOrders');
            
    }

    public function deleteOrder(Order $order){
        $order -> delete();
        return redirect() -> route('orders.showOrders');
    }
}

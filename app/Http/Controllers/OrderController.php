<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function store(Request $request) {
        /*
        STATUS
        0 = RUNNING
        1 = FINISHED
        */
        $data = ["freelancer_id" => $request->freelancer_id, "service_id" => $request->service_id, "customer_id" => Auth::user()->id, "status" => 0, "customer_email" => Auth::user()->email, "freelancer_email" => $request->freelancer_email, "service_name" => $request->service_name, "customer_name" => $request->customer_name, "freelancer_name" => $request->freelancer_name];
        Order::create($data);
        return redirect('dashboard')->with('success', 'Service bought!');
    }

    public function finish(Request $request) {
        $order = Order::find($request->order_id);
        $order->status = 1;
        $order->save();
        return redirect('dashboard')->with('success', 'Order finished!');
    }
}

<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index() {
        if (Auth::user()->role == 0) {
            $orders = Order::where('customer_id', Auth::user()->id)->get();
        } else if(Auth::user()->role == 1) {
            $orders = Order::where('freelancer_id', Auth::user()->id)->get();
        }

        $services = Service::where("user_id", Auth::user()->id)->get();

        return view("dashboard", ["orders" => $orders, "services" => $services]);
    }
}

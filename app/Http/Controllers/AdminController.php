<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use App\Models\Info;
use DomPDF;

class AdminController extends Controller
{
    public function index() {
        $orders = Order::get();
        $services = Service::get();
        $users = User::get();
        $infos = Info::get();
        return view('admin', [
            "orders" => $orders,
            "services" => $services,
            "users" => $users,
            "infos" => $infos
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Outcomes;
use App\Models\Customers;
use App\Models\Orders;
use Carbon\Carbon;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $customers = Customers::get()->count();
        $orders = Orders::get()->count();
        $months = Carbon::now();
        $outcomes = Outcomes::whereMonth('tanggal_pembelian', $months->month)->sum('total_harga');
        $datas = Orders::take(5)->get();
        $customer = Customers::all();
        return view('home', [
            'title' => 'Dashboard',
            'customers' => $customers,
            'outcomes' => $outcomes,
            'orders' => $orders,
            'datas' => $datas,
            'customer' => $customer
        ]);
    }
}

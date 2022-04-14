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
        $orders = Orders::all();
        $customers = Customers::all();
        $months = Carbon::now();
        $outcomes = Outcomes::whereMonth('tanggal_pembelian', $months->month)->sum('total_harga');
        $datas = Orders::take(5)->get();
        $deadlines = Orders::where('confirmed', 0)->whereDate('tanggal_deadline', '>', Carbon::now())->orderBy('tanggal_deadline', 'ASC')->take(5)->get();
        return view('home', [
            'title' => 'Dashboard',
            'outcomes' => $outcomes,
            'orders' => $orders,
            'datas' => $datas,
            'customers' => $customers,
            'deadlines' => $deadlines,
            'months' => $months
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Outcomes;
use App\Models\Customers;
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
        $months = Carbon::now();
        $outcomes = Outcomes::whereMonth('tanggal_pembelian', $months->month)->sum('total_harga');
        return view('home', [
            'title' => 'Dashboard',
            'customers' => $customers,
            'outcomes' => $outcomes
        ]);
    }
}

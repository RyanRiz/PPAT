<?php

namespace App\Http\Controllers;

use App\Models\Customers;
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
        return view('home', [
            'title' => 'Dashboard',
            'customers' => $customers
        ]);
    }
}

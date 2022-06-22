<?php

namespace App\Http\Controllers;

use App\Exports\ExcelExport;
use Illuminate\Http\Request;
use Excel;
use App\Models\Orders;
use App\Models\Customers;


class ExcelController extends Controller
{
    public function export()
    {
        return Excel::download(new ExcelExport, 'Data.xlsx');
    }

    public function index()
    {
        $customers = Customers::get();

        $orders = Orders::all();



        return view('excel.main', [
            'title' => 'Database',
            "orders" => Orders::all(),
            "customers" => $customers,
            "pembeli" => Customers::get(),
            "penjual" => Customers::get(),
        ]);
    }
}

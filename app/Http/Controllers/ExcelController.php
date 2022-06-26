<?php

namespace App\Http\Controllers;

use Excel;
use App\Models\Orders;
use App\Models\Customers;
use App\Exports\ExcelExport;
use App\Imports\ExcelImport;
use Illuminate\Http\Request;


class ExcelController extends Controller
{
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

    public function import(Request $request){
        Excel::import(new ExcelImport, $request->file('import'));
        return back()->with('message','File berhasil diunggah!');
    }
}

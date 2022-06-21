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
        $pembeli = Orders::pluck('ktp_pembeli');
        $customers = Customers::where('ktp', $pembeli)->get();
        $penjual = Orders::pluck('ktp_penjual');
        $sellers = Customers::where('ktp', $penjual)->get();
        return view('excel.main', [
            'title' => 'Database',
            "orders" => Orders::all(),
            "pembeli" => $customers,
            "penjual" => $sellers,
        ]);
    }
}

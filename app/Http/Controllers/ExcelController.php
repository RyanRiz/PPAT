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
        $penjual = Orders::pluck('ktp_penjual');

        $customers = Customers::get();

        return view('excel.main', [
            'title' => 'Database',
            "orders" => Orders::all(),
            "customers" => $customers,
            "pembeli" => $pembeli,
            "penjual" => $penjual,
        ]);
    }
}

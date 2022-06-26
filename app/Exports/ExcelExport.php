<?php

namespace App\Exports;

use App\Models\Orders;
use App\Models\Customers;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExcelExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $customers = Customers::get();

        $orders = Orders::all();

        return view('permohonan.table', [
            "orders" => Orders::all(),
            "customers" => $customers,
            "pembeli" => Customers::get(),
            "penjual" => Customers::get(),
        ]);
    }
}

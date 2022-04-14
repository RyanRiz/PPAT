<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use PDF;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ExportController extends Controller
{
    public function cetak($id)
    {
    	$data = Orders::find($id);
        $customer = Customers::all();
        $date = Carbon::now()->isoFormat('D MMMM Y');

    	$pdf = PDF::loadview('tes',[
            'customer' => $customer,
            'data' => $data,
            'date' => $date
            ]);
    	return $pdf->stream();
    }
}

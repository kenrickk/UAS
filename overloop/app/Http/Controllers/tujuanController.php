<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Viewtujuan;
use PDF;


class tujuanController extends Controller
{
    //
    public function index()
    {  
        $tujuan = Viewtujuan::all();
        return view('admin.tujuan.index', ['title' => 'tujuan'],compact('tujuan'));
    }

    public function print_pdf()
    {
    	$tujuan = Viewtujuan::all();
 
    	$pdf = PDF::loadView('admin.tujuan.print_pdf',compact('tujuan'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('tujuan-pdf.pdf');
    }
}

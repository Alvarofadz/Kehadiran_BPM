<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class laporanController4 extends Controller
{
    public function show4()
    {
        $data = laporan::select('NAMA')->where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->groupBy('NAMA')->get();
        return view('laporan4',compact('data'));
    }
}

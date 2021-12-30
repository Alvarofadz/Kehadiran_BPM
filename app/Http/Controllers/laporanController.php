<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function show()
    {
        ///$data = laporan::all();
        $data = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->where('STATUS_KEHADIRAN','<>','Cuti') ->get();
        return view('laporan1',compact('data'));
    }
}

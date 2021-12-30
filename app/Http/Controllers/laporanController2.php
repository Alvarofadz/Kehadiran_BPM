<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class laporanController2 extends Controller
{
    public function show2()
    {
        ///$data = laporan::all();
        $data = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->where('STATUS_KEHADIRAN','<>','Cuti')->where('JAM_BEKERJA','<=','8') ->get();
        return view('laporan2',compact('data'));
    }
}

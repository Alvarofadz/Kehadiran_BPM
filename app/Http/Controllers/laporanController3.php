<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class laporanController3 extends Controller
{
    public function show3()
    {
        ///$data = laporan::all();
        $data = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat') ->get();
        return view('laporan3',compact('data'));
    }
}

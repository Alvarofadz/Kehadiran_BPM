<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function show()
    {
        $data = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->where('STATUS_KEHADIRAN','<>','Cuti')->where('STATUS_KEHADIRAN','<>','Biasa')->where('STATUS_KEHADIRAN','<>','Bekerja Dari Rumah')->where('STATUS_KEHADIRAN','<>','Luar Kawasan pejabat')->where('STATUS_KEHADIRAN','<>','Tidak Daftar Masuk')->where('STATUS_KEHADIRAN','<>','Bekerja Dari Rumah dan Tidak Daftar Keluar')->where('STATUS_KEHADIRAN','<>','Luar Kawasan Pejabat dan Tidak Daftar Keluar')->where('STATUS_KEHADIRAN','<>','Tidak Daftar Keluar')->where('STATUS_KEHADIRAN','<>','Tidak mencukupi jam kerja')->where('STATUS_KEHADIRAN','<>','Tidak Mencukupi Jam Kerja dan Bekerja Dari Rumah')  ->get();
        return view('laporan1',compact('data'));
    }
    public function show2()
    {
        $data = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->where('STATUS_KEHADIRAN','<>','Cuti')->where('JAM_BEKERJA','<=','8') ->get();
        return view('laporan2',compact('data'));
    }
    public function show3()
    {
        $data = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->where('STATUS_KEHADIRAN','LIKE','Luar Kawasan pejabat') ->get();
        return view('laporan3',compact('data'));
    }
    public function show4()
    {
        $data = laporan::select('NAMA')->where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->groupBy('NAMA')->get();
        return view('laporan4',compact('data'));
    }
    public function detail($id)  
    {
        $staff = Laporan::where('nama', 'like', '%' . $id . '%')->first();
        $data = laporan::where('nama', 'like', '%' . $id . '%')->where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->get();       
        return view('punchcard', compact('staff','data'));
    }

}

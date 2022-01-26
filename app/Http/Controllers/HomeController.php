<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laporan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data1 = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->where('STATUS_KEHADIRAN','<>','Cuti')->where('STATUS_KEHADIRAN','<>','Biasa')->where('STATUS_KEHADIRAN','<>','Bekerja Dari Rumah')->where('STATUS_KEHADIRAN','<>','Luar Kawasan pejabat')->where('STATUS_KEHADIRAN','<>','Tidak Daftar Masuk')->where('STATUS_KEHADIRAN','<>','Bekerja Dari Rumah dan Tidak Daftar Keluar')->where('STATUS_KEHADIRAN','<>','Luar Kawasan Pejabat dan Tidak Daftar Keluar')->where('STATUS_KEHADIRAN','<>','Tidak Daftar Keluar')->where('STATUS_KEHADIRAN','<>','Tidak mencukupi jam kerja')->where('STATUS_KEHADIRAN','<>','Tidak Mencukupi Jam Kerja dan Bekerja Dari Rumah')->count();
        $data2 = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->where('STATUS_KEHADIRAN','<>','Cuti')->where('JAM_BEKERJA','<=','8') ->count();
        $data3 = laporan::where('BAHAGIAN','LIKE','Bahagian Pengurusan Maklumat')->where('STATUS_KEHADIRAN','LIKE','Luar Kawasan pejabat')->count();
        return view('home',compact('data1','data2','data3'));
    }
}

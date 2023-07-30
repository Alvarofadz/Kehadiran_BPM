<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Models\User;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    // All query and databse for KKM is Private and Confidential and anly can be used within KKM only
    // You can change your query according to your need
    public function show()
    {
        // your query here
        $data = User::where('id',0);
        return view('laporan1', compact('data'));
    }
    public function show2()
    {
        // your query here
        $data = User::where('id',0);
        return view('laporan2', compact('data'));
    }
    public function show3()
    {
        // your query here
        $data = User::where('id',0);
        return view('laporan3',compact('data'));
    }
    public function show4()
    {
        //your query here
        $data = User::where('id',0);
        return view('laporan4',compact('data'));
    }
    public function detail($id)  
    {
        // $staff = Laporan::where('nama', 'like', '%' . $id . '%')->first();
        // $data = laporan::where('nama', 'like', '%' . $id . '%')->get();       
        // return view('punchcard', compact('staff','data'));
        return view('punchcard');
    }

}

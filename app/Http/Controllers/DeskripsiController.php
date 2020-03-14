<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    public function setjen()
    {
        $data_deskripsiweb = \App\deskripsi::select('nama_url', 'nama_eselon', 'deskripsi', 'status', 'tampilan', 'update_at', 'mytimesampcol')->get();
        return view('setjen.deskripsi', compact('data_deskripsiweb'));
    }
}

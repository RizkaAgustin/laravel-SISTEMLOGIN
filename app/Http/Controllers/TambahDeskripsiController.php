<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tb_deskripsiweb as web;

class TambahDeskripsiController extends Controller
{
    public function index()
    {
        $datas = web::all('status');


        return view('tambahdeskripsi', compact('datas'));
    }

    public function createweb(Request $req)
    {
        $post = web::create([
            'nama_url'      => $req->nama_url,
            'nama_eselon'   => $req->nama_eselon,
            'deskripsi'     => $req->deskripsi,
            'status'        => $req->status,
            'tampilan'      => $req->tampilan
        ]);

        if ($req->hasFile('tampilan')) {
            $req->file('tampilan')->move('assets/', $req->file('tampilan')->getClientOriginalName());
            $post->tampilan = $req->file('tampilan')->getClientOriginalName();
            $post->save();
        }

        return redirect('/deskripsi');
    }
}

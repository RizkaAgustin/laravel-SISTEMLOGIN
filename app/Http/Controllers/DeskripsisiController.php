<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DeskripsisiController extends Controller
{

    public function eselon($id_eselon)
    {
        // $data_deskripsiweb = \App\deskripsi::select('nama_url', 'nama_eselon', 'deskripsi', 'status', 'tampilan')->get();
        $data['data_deskripsisi'] = DB::table('tb_deskripsi_si')->where('id_eselon1', $id_eselon)->get();
        $data['id_eselon'] = $id_eselon;
        // return view('setjen.deskripsi', compact('data_deskripsiweb'));
        return view('setjen.deskripsisi', $data);
    }

    public function edit($id)
    {
        $data['deskripsi_si'] = DB::table('tb_deskripsi_si')->where('id', $id)->first();
        return view('updatedeskripsisi', $data);
    }
    public function update(Request $req)
    {
        DB::table('tb_deskripsi_si')->where('id', $req->id)->update(
            [
                'nama_url'      => $req->nama_url,
                'nama_eselon'   => $req->nama_eselon,
                'deskripsi'     => $req->deskripsi,
                'status'        => $req->si_status
            ]
        );

        if ($req->hasFile('tampilan')) {
            $req->file('tampilan')->move('assets/', $req->file('tampilan')->getClientOriginalName());
            $name_tampilan = $req->file('tampilan')->getClientOriginalName();
            DB::table('tb_deskripsi_si')->where('id', $req->id)->update(['tampilan' => $name_tampilan]);
        }
        return redirect('/deskripsisi' . '/' . $req->id_eselon1);
    }
}

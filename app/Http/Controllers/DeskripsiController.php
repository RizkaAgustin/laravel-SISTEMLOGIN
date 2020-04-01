<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DeskripsiController extends Controller
{
    public function kategorisetjen()
    {
        return view('setjen.kategori');
    }
    public function kategoriitjen()
    {
        return view('itjen.kategoriitjen');
    }
    public function kategoripktl()
    {
        return view('pktl.kategoripktl');
    }
    public function kategoriksdae()
    {
        return view('ksdae.kategoriksdae');
    }
    public function kategoripdashl()
    {
        return view('pdashl.kategoripdashl');
    }
    public function kategoriphpl()
    {
        return view('phpl.kategoriphpl');
    }
    public function kategorippkl()
    {
        return view('ppkl.kategorippkl');
    }
    public function kategoripslb3()
    {
        return view('pslb3.kategoripslb3');
    }
    public function kategoriditjenppi()
    {
        return view('ditjenppi.kategoriditjenppi');
    }
    public function kategoripskl()
    {
        return view('pskl.kategoripskl');
    }
    public function kategorigakkum()
    {
        return view('gakkum.kategorigakkum');
    }
    public function kategoribp2sdm()
    {
        return view('bp2sdm.kategoribp2sdm');
    }
    public function kategorilitbang()
    {
        return view('litbang.kategorilitbang');
    }
    public function eselon($id_eselon)
    {
        // $data_deskripsiweb = \App\deskripsi::select('nama_url', 'nama_eselon', 'deskripsi', 'status', 'tampilan')->get();
        $data['data_deskripsiweb'] = DB::table('tb_deskripsi_web')->where('id_eselon1', $id_eselon)->get();
        $data['id_eselon'] = $id_eselon;
        // return view('setjen.deskripsi', compact('data_deskripsiweb'));
        return view('setjen.deskripsiweb', $data);
    }

    public function edit($id)
    {
        $data['deskripsi_web'] = DB::table('tb_deskripsi_web')->where('id', $id)->first();
        return view('updatedeskripsiweb', $data);
    }
    public function update(Request $req)
    {
        DB::table('tb_deskripsi_web')->where('id', $req->id)->update(
            [
                'nama_url'      => $req->nama_url,
                'nama_eselon'   => $req->nama_eselon,
                'deskripsi'     => $req->deskripsi,
                'status'        => $req->web_status
            ]
        );

        if ($req->hasFile('tampilan')) {
            $req->file('tampilan')->move('assets/', $req->file('tampilan')->getClientOriginalName());
            $name_tampilan = $req->file('tampilan')->getClientOriginalName();
            DB::table('tb_deskripsi_web')->where('id', $req->id)->update(['tampilan' => $name_tampilan]);
        }
        return redirect('/deskripsiweb' . '/' . $req->id_eselon1);
    }
}

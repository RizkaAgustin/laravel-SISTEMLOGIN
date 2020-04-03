<?php

namespace App\Http\Controllers;

use App\deskripsi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Tb_deskripsiweb as web;

class TambahDeskripsiController extends Controller
{
    public function index($id_eselon)
    {
        // $datas = web::all('status');

        // return view('tambahdeskripsi', compact('datas'));
        $data['eselon1'] =  DB::table('tb_eselon1')->where('id', $id_eselon)->first();
        return view('tambahdeskripsiweb', $data);
    }

    public function createweb(Request $req)
    {
        $this->validate($req, [
            'nama_url' => 'required',
            'nama_eselon' => 'required',
            'deskripsi' => 'required'

        ]);

        $a = array([
            'id' => $req->id,
            'id_kategori_web' => $req->id_kategori_web,
            'id_eselon1' => $req->id_eselon1,
            'nama_url'      => $req->nama_url,
            'nama_eselon'   => $req->nama_eselon,
            'deskripsi'     => $req->deskripsi,
            'status'        => $req->web_status
        ]);
        DB::table('tb_deskripsi_web')->insert($a);
        $id_deskripsi_web =  DB::table('tb_deskripsi_web')->select('id')->orderBy('id', 'desc')->first();
        // $post = web::create([
        //     'nama_url'      => $req->nama_url,
        //     'nama_eselon'   => $req->nama_eselon,
        //     'deskripsi'     => $req->deskripsi,
        //     'status'        => $req->status,
        //     'tampilan'      => $req->tampilan
        // ]);



        if ($req->hasFile('tampilan')) {
            $req->file('tampilan')->move('assets/', $req->file('tampilan')->getClientOriginalName());
            $name_tampilan = $req->file('tampilan')->getClientOriginalName();
            DB::table('tb_deskripsi_web')->where('id', $id_deskripsi_web->id)->update(['tampilan' => $name_tampilan]);
        }

        return redirect('/deskripsiweb' . '/' . $req->id_eselon1)->with('sukses', 'Data berhasil diinput');
    }
    public function destroy($data, $data_eselon)
    {

        DB::table('tb_deskripsi_web')->where('id', $data)->delete();
        return redirect('/deskripsiweb' . '/' . $data_eselon);
    }
}

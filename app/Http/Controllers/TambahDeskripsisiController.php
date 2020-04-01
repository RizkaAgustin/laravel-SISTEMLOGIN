<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TambahDeskripsisiController extends Controller
{
    public function index($id_eselon)
    {
        // $datas = web::all('status');

        // return view('tambahdeskripsi', compact('datas'));
        $data['eselon1'] =  DB::table('tb_eselon1')->where('id', $id_eselon)->first();
        return view('tambahdeskripsisi', $data);
    }

    public function createsi(Request $req)
    {
        $this->validate($req, [
            'nama_url' => 'required',
            'nama_eselon' => 'required',
            'deskripsi' => 'required'

        ]);

        $a = array([
            'id' => $req->id,
            'id_kategori_si' => $req->id_kategori_si,
            'id_eselon1' => $req->id_eselon1,
            'nama_url'      => $req->nama_url,
            'nama_eselon'   => $req->nama_eselon,
            'deskripsi'     => $req->deskripsi,
            'status'        => $req->si_status
        ]);
        DB::table('tb_deskripsi_si')->insert($a);
        $id_deskripsi_si =  DB::table('tb_deskripsi_si')->select('id')->orderBy('id', 'desc')->first();
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
            DB::table('tb_deskripsi_si')->where('id', $id_deskripsi_si->id)->update(['tampilan' => $name_tampilan]);
        }

        return redirect('/deskripsisi' . '/' . $req->id_eselon1);
    }
    public function destroy($data, $data_eselon)
    {

        DB::table('tb_deskripsi_si')->where('id', $data)->delete();
        return redirect('/deskripsisi' . '/' . $data_eselon);
    }
}

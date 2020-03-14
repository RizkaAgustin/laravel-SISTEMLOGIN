<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_deskripsiweb extends Model
{
    protected $fillable = [
        'id_kategori_web', 'id_eselon1', 'nama_url', 'nama_eselon', 'ip_address', 'deskripsi', 'status', 'tampilan', 'update_at', 'mytimesampcol'
    ];

    protected $table = 'tb_deskripsi_web';
}

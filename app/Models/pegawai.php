<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table = 'mas_peg';
    protected $primaryKey = 'no_peg';
    public $timestamps = false;

    protected $fillable = [
        'na_peg', 'alamat', 'alamat_dms', 'tmpt_lahir', 
        'tgl_lahir', 'tgl_masuk', 'tgl_dinas', 'sex', 
        'pendidikan', 'bank', 'no_rek', 'no_ktp', 'email', 
        'no_hp','foto_pegawai', 'agama',
        'kd_jab', 'kd_golongan', 'status_peg', 'kd_unit',  
    ];

}

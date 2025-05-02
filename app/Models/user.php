<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class user extends Authenticatable
{
    protected $table = 'm_pass';
    public $timestamps = false;

    protected $fillable = [
        'user_name',
        'pass',
        'tgl_update'
    ];

    protected $hidden = [
        'pass'
    ];

    public function getAuthIdentifierName()
    {
        return 'user_name';
    }
    public function getAuthPassword()
    {
        return $this->pass;
    }

    public function profile()
    {

        $result = DB::selectOne(
            'SELECT mas_peg.*, m_jabatan.nm_jab, m_unit.nm_unit, m_bagian.nm_bagian
            FROM mas_peg
            LEFT JOIN m_jabatan ON mas_peg.kd_jab = m_jabatan.kd_jab
            LEFT JOIN m_unit ON mas_peg.kd_unit = m_unit.kd_unit
            LEFT JOIN m_bagian ON m_unit.kd_bagian = m_bagian.kd_bagian
            WHERE mas_peg.no_peg = ? AND mas_peg.is_del = 0', 
            [$this->user_name]);

        return $result;
    }

    public function mutasi()
    {
        $result = DB::select(
            'SELECT * FROM t_mutasi
            WHERE no_peg = ?', [$this->user_name]
        );

        return $result;
    }
}

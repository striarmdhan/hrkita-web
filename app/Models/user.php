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
        $result = DB::selectOne('SELECT * FROM mas_peg WHERE no_peg = ? AND is_del = 0', [$this->user_name]);
        return $result;
    }
}

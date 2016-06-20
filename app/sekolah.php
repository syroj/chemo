<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    protected $table='sekolah';

    public function tim(){
    	$this->hasMany('App\tim');
    }
    public function peserta(){
    	$this->hasMany('App\peserta');
    }
}

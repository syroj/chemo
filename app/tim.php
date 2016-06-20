<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tim extends Model
{
    protected $table='tim';
    public function peserta(){
    	$this->hasMany('App\peserta');
    }
    public function sekolah(){
    	$this->belongsTo('App\sekolah');
    }
}

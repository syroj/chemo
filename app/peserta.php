<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    protected $table='peserta';

    public function tim(){
    	$this->belongsTo('App\tim');
    }
    public function sekolah(){
    	$this->belongsTo('App\sekolah');
    }

}

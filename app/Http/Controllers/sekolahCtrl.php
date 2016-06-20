<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\tim;
use App\peserta;
use App\sekolah;
class sekolahCtrl extends Controller
{
    public function __construct(){
        $this->middleware('sekolah');
    }
    public function index(){
        $key    = auth()->User()->key;
            $data   = sekolah::where('key',$key)->get();
            $tim    = tim::where('key_sekolah',$key)->get();
            $member = peserta::where('key_sekolah',$key)->orderBy('key','desc')->get();
            return view('sekolah.home',[
                'data'=>$data,
                'tim'=>$tim,
                'member'=>$member
                ]);
    }
    public function daftar_ulang(Request $request){
    	$du=[
    	'key' =>$request->key,
    	'nama_sekolah' =>$request->nama_sekolah,
    	'status_sekolah' =>$request->status_sekolah,
    	'telp_sekolah' =>$request->telp_sekolah,
    	'email_sekolah' =>$request->email_sekolah,
    	'alamat_sekolah' =>$request->alamat_sekolah,
    	'website_sekolah' =>$request->website_sekolah
    	];
    	$insert=sekolah::insert($du);
		
		$data=[
		'name'=>$request->nama_sekolah,
		'email'=>$request->email_sekolah
		];
    	$user=User::where('key',$request->key)->update($data);
    	return redirect('/home');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\tim;
use App\User;
use App\sekolah;
class timCtrl extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
	public function index(){
		$key=auth()->user()->key;
		$rule=auth()->user()->rule;
		if ($rule=='sekolah') {
		$g1=tim::where('key_sekolah',$key)->get();
			return view('tim.tim')->with('tim',$g1);
		}else{
		$g1=tim::where('key',$key)->get();
			return view('tim.one')->with('tim',$g1);
		}
	}
	public function one($key){
		$g1=tim::where('key',$key)->get();
		return view('tim.one')->with('tim',$g1);
	}
    public function add(Request $request){
    	$key 	= auth()->user()->key;
    	$count	= tim::where('key_sekolah',$key)->count();
    	if ($count < 3) {
		    	$id=str_random(7);
		    	$tim=[
			    	'key_sekolah'	=>$request->key_sekolah,
			    	'key'			=>$id,
			    	'nama_tim'		=>$request->nama_tim,
			    	'status'		=>'active',
		    	];
		    	$save_tim=tim::insert($tim);

		    	$account=[
		    		'key'		=>$id,
		    		'name'		=>$request->nama_tim,
		    		'username'	=>$request->username,
		    		'password'	=>bcrypt($request->password),
		    		'rule'		=>'tim',
		    		'status'	=>'1',
		    		'remember_token'=>$request->_token,
		    	];
		    	$save_account=User::insert($account);
		    	return redirect('/sekolah')->with('pesan','Data berhasil disimpan');
    		} else {
		    	return redirect('/sekolah')->with('pesan','Tim Sudah maksimal');
    		}	
    }
    public function delete($key){
    	$del 	=tim::where('key',$key)->delete();
    	$user 	=User::where('key',$key)->delete();
    	return redirect('/sekolah')->with('pesan','data berhasil dihapus');
    	
    }
}

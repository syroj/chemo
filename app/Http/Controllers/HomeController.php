<?php

namespace App\Http\Controllers;
use App\sekolah;
use App\User;
use App\tim;
use App\peserta;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        { $rule = auth()->user()->rule;
            if ($rule =='admin') {
                return redirect('/admin');
            }elseif ($rule=='tim') {
                return redirect('/tim');
            }else{
                return redirect('/sekolah');
            }
            
        }
    }
}

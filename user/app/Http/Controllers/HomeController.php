<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public  function edit(){
        return view('editprofile');
    }
     public  function open(){
        return view('openAcc');
    }
     public  function feed(){
        return view('feedback');
    }
    public function welcome(){
        return view('welcome');
    }
   public function showAcc(){
    $flag=auth()->user()->flag;
    return view('acc')->with('flag',$flag);
   }

    public function bal(){
        return view('balance');
    }
    public function send(){
        return view('send_money');
    }



}

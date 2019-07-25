<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

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
    public function showusers(){

        $data = Admin::all();
     //   return var_dump($data);

        return view('showUsers')->with('data',$data);
    }

    public function activate($id){
        $cs = Admin::where('id',$id)->update(['account_no' => rand(100000,999999),
            'balance'=>5000]);
         $data = Admin::all();
         return redirect()->to('showUsers')->with('data',$data);
       // return view('showUsers')->with('data',$data);
    }
    public function deactivate($id){
        $cs = Admin::where('id',$id)->update(['account_no' => 0,
            'balance'=>0]);
         $data = Admin::all();
         return redirect()->to('showUsers')->with('data',$data);
        //return view('showUsers')->with('data',$data);
        
    }
}

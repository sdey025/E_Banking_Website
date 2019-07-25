<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use DB;
use Auth;
use App\User;
use App\transhistory;


class transaction extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
            return view('send_money');
       


      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return User::create([
            'to_account' => $data['to_account'],
            'to_name' => $data['to_name'],
            'amount'=> $data['amount'],
            'my_account' => $data['my_account']

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return var_dump($request->to_account);
          $to_acc = $request->to_account;
        
        $amt = $request->amount;
        $balance_sender = Auth::user()->balance;
        $balance_sender = $balance_sender-$amt;
        $reciever_data = DB::table('users')->where('account_no', $to_acc)->select('balance','id')->get();
        
        $balance_reciever = $reciever_data[0]->balance;
        $balance_reciever = $balance_reciever+$amt;
        $reciever_id = $reciever_data[0]->id;
        $sender_table = User::find(Auth::user()->id);
        $sender_table->balance = $balance_sender;
        $sender_table->save();
        //var_dump($sender_table); exit;


        $reciever_table = new transhistory;
        $reciever_table->amount = $amt;
        $reciever_table->to_acc=$to_acc;
        $reciever_table->from_acc=Auth::user()->account_no;
        $reciever_table->save();
        return "success";



        // $device = new User();
 
        // $device->name = request('name');
        // $device->description = request('description');

      //  $accountno = $request->to_name;
       // return var_dump($accountno);
       // $id=Auth::user()->id;
        //$amount = (int)$request->input('amount');
        
         // $balance1 = DB::table('users')->where('to_acc', $accountno)->select('balance')->post();
        //return var_dump($balance1);
     
        //return (array)$balance1[0]->balance;exit;
       // return $balance;
      //$balance1=(array)$balance1['balance'];
        
        //return (int)$balance1[0];exit;
       //  $balance1=(int)$balance1[0];
        //return $balance1;exit;
        //$balance_reciever = $balance1 + $amount;
        //$balance2 = DB::table('users')->where('id',$id)->select('account_no')->get();
       // $balance2=(array)$balance2[0]->balance;
       // $balance2=(int)$balance2[0];
        //return $balance2;exit;
        //return $balance;
       // $balance_sender=$balance2-$amount;
        //DB::update('update users set balance = ? where account_no = ?',[$balance_reciever,$accountno]);
        //DB::update('update users set balance = ? where id = ?',[$balance_sender,$id]);
           echo "Record updated successfully.<br/>"; 
 
        
 
        return redirect('/successtran');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
        public function trans(){
        $data = transhistory::all();
        return view('transactions')->with('data',$data);
    }
}

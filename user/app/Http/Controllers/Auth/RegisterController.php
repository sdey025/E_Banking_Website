<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/acc';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data){
        $request = request();
          $file_name_to_store = '';
        if ($request->hasFile('cover_image')) {
                   $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                   //get just filename
                   $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                   $ext = $request->file('cover_image')->getClientOriginalExtension();
                   //filename to store
                   //if($extenstion!=".jpg"){}
                   $filenameToStore = $filename.'_'.time().'.'.$ext;
                   //upload the image
                   $path = $request->file('cover_image')->storeAs('public/image', $filenameToStore);
               }else{
                return "no file exist";
               }
               $err = 0;
               foreach($_POST as $key => $value){
                if(empty($value)) {
                    $err = 1;
                }
               }
               if($err==1){
                return redirect('openAcc')->with('error','All fields are mandatory');
               }
              

    
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile'=> $data['mobile'],
            'address' => $data['address'],
            'aadhar' =>$data['aadhar'],
            'flag'=>0,
            'cover_image'=> $path

        ]);
    }
    

   }

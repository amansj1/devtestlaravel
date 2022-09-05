<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

  

class SignController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }


    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
  
        return redirect()->back();
    }
    public function dash(){

       return view('dash');
    }
    public function create(Request $data)
    {       
       session()->forget('name');
       session()->forget('email');



        $name =  $data->fullname;
        $email = $data->email;
     
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($data->pass),
            'subdomain' => $data->subdomain,
            
        ]);

        session()->put('name', $name);
        session()->put('email', $email);
      
       
        $maindomain = str_replace('://','://'.$data->subdomain.'.',config('app.url'));
        return redirect($maindomain.RouteServiceProvider::HOME);
    

        
     
    }
}

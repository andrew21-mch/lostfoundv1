<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller

{
    //
    function register(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:admins'
        ]);
       $admin = new Admin();
       $admin->name = $request->name;
       $admin->email = $request->email;
       $admin->phone = $request->phone;
       $admin->password = Hash::make($request->password);
       $admin->schoolid = $request->school;

       if($admin->save()){
        $request->session()->put('message', 'Account created, Please login');
        return redirect('login')->with("message", 'Account created, Please login');
       }
       else{
        return redirect('register')->with("message", 'Something Went Wrong, Please Try again');
       }
    } 

    function login(Request $request){
        $request->validate([
            'password' => 'required',
            'email' => 'required'
        ]);

        $admin = $this->findByEmail($request->email);
        if(count($admin) > 0){
            if(!Hash::check($request->input, $admin[0]->password)){
                $request->session()->put('admin',$admin[0]->email);
                $request->session()->put('role',$admin[0]->role);
                return redirect('dashboard');
            }
            else{
                $request->session()->put('error', 'Invalid username of password!');
                return redirect('login')->with('errorss', 'No Such Username or password'); 
            }   
        }
        else{
            $request->session()->put('error', 'Invalid username of password!');
            return redirect('login')->with('errorss', 'No Such Username or password');
        }
        
    }

    function findByEmail($email){
        if(DB::table('admins')->where('email', $email)){
            return DB::table('admins')->where('email', $email)->get();
        }
        else{
            return null;
        }
    }

    function logout(){
        if(Session::has('admin')){

          Session::pull('admin');
          Session::flush();

          return redirect('/');
        }
      }
}

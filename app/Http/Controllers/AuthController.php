<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller

{
    //register user
    function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:admins',
            // 'repeat'=>'required',
            // 'auth_key'=>'required',
            // 'school'=>'required'
        ]);

        //check for auth key in the database
        $auth = Token::where('token', $request->auth_key)->first();
        if ($auth) {
            $auth_key = $auth->token;
        } else {
            $request->session()->put('message', 'Invalid Auth Key');
            return redirect('register');
        }
        //check if auth key and password are valid
        if ($request->password == $request->repeat && $request->auth_key == $auth_key) {

            $admin = new Admin();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;
            $admin->password = Hash::make($request->password);
            $admin->schoolid = $request->school;


            if ($admin->save()) {
                $request->session()->put('message', 'Account created, Please login');
                return redirect('login');
            } else {
                $request->session()->put('message', 'Something went wrong');
                return redirect('register');
            }
        } else {
            $request->session()->put('message', 'Invalid Auth Key or Unmatched Passwords');
            return redirect('register');
        }
    }

    //Login user
    function login(Request $request)
    {
        //validate the form data
        $request->validate([
            'password' => 'required',
            'email' => 'required'
        ]);

        $admin = $this->findByEmail($request->email);
        if (count($admin) > 0) {
            if (Hash::check($request->password, $admin[0]->password)) {
                $request->session()->put('admin', $admin[0]->email);
                $request->session()->put('userid', $admin[0]->id);
                $request->session()->put('role', $admin[0]->role);
                return redirect('dashboard');
            } else {
                $request->session()->put('message', 'Invalid username of password!');
                return redirect('login');
            }
        } else {
            $request->session()->put('error', 'Invalid username of password!');
            return redirect('login')->with('errorss', 'No Such Username or password');
        }
    }

    //find user by email
    function findByEmail($email)
    {
        if (DB::table('admins')->where('email', $email)) {
            return DB::table('admins')->where('email', $email)->get();
        } else {
            return null;
        }
    }

    //Update user account
    public function update(Request $request)
    {
        $admin = Admin::find($request->id);
        if ($admin) {
            if ($admin->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->get('password'))
            ])) {
                $request->session()->put('message', "Account succesfuly updated");
                return redirect()->back();
            } else {
                $request->session()->put('message', "Something went wrong");
                return redirect()->back();
            }
        }
    }

    public function logout(Request $request){ 
        //check if user is logged in
        if ($request->session()->has('admin')) {
            $request->session()->forget('admin');
            $request->session()->forget('userid');
            $request->session()->forget('role');
            return redirect('login');
        } else {
            return redirect('login')->with('message', 'you just looged out');
        }
    }

    //get all users
    public function viewaccount($id)
    {
        if(
            $account = Admin::where('id', $id)
            ->join('schools', 'admins.schoolid', 'schools.schoolid')
            ->first())
        {
            return view('updateAccount', ['accountdetails' => $account]);
        }
        else{
            $account = Admin::where('id', $id)->first();
            return view('updateAccount', ['accountdetails' => $account]);
        }
        
    }



    //Create Registration key For other admins to user
    public function addKey(Request $request)
    {
        $request->validate([
            'key' => 'required'
        ]);

        $key = new Token();
        $key->token = $request->key;
        if ($key->save()) {
            $request->session()->put('message', "Token Successfully Created");
            return redirect('dashboard');
        } else {
            $request->session()->put('message', "Error creating token, check again");
            return redirect()->back();
        }
    }

    public function viewkeys()
    {
        $keys = Token::all();
        return view('viewtokens', ['tokens' => $keys]);
    }

    public function deletekey($id)
    {
        $key = Token::find($id);
        if ($key->delete()) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function viewadmins(){
        $admins = Admin::join('schools', 'schools.schoolid', 'admins.schoolid')
        ->get();
        return view('/viewadmins', ['admins' => $admins]);
    }

    public function deleteadmin($id){
        $admin = Admin::find($id);
        if ($admin->delete()) 
        {
            Session::put('message', "Account succesfuly Deleted");
            return redirect()->back();
        } else {
            Session::put('message', "Something went wrong");
            return redirect()->back();
        }
    }

    public function editadmin($id){
        $admin = Admin::find($id);
        return view('/editadmin', ['admin' => $admin]);
    }

    public function updateadmin(Request $request){
        $admin = Admin::find($request->id);
        if ($admin) {
            if ($admin->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->get('password'))
            ])) {
                Session::put('message', "Account succesfuly updated");
                return redirect()->back();
            } else {
                Session::put('message', "Something went wrong");
                return redirect()->back();
            }
        }
    }

    public function resetuser($id){
        if(Session::get('role') == 'admin'){
            $admin = Admin::find($id);
            if ($admin) {
                if ($admin->update([
                    'password' => Hash::make('school')
                ])) {
                    Session::put('message', "Account succesfuly reset");
                    return redirect()->back();
                } else {
                    Session::put('message', "Something went wrong");
                    return redirect()->back();
                }
            }
            else{
                Session::put('message', "You don't have the privilege to do this");
                return redirect()->back();
            }
        }
        
    }
}

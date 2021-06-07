<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class MainController extends Controller
{

    public function login()
    {
        return view('login');
    }  

    public function register()
    {
        return view('register');
    }
    
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('welcome');
        }
        return Redirect::to("login")->withSuccess('Opps! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        //'contact_number' => 'required|contact_number|unique:users',
        'password' => 'required|min:6',
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("welcome")->withSuccess('Great! You have Successfully logged in');
    }
    
    public function home()
    {

      if(Auth::check()){
        return view('welcome');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

 public function create(array $data)
 {
   return User::create([
     'name' => $data['name'],
     'email' => $data['email'],
     'password' => Hash::make($data['password'])
   ]);
 }
 
 public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
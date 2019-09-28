<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use App\User;
use Hash;
use DB;
use File;
use Session;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use PDF;   
use Response;

class LoginController extends BaseController
{
    function login(){
		return view('login');
	}
	
	function loginresult(){
		if(Auth::check()){
		    return redirect('/login');
		}
		$email =  $_POST['email'];
		$password = $_POST['password'];
		$userdata = array(
			'email'     => $email,
			'password'  => $password
		);
		// attempt to do the login
		if (Auth::attempt($userdata)) {
			return view('home');
		} else {        
			//Session::flash('message', "Invalid Username/Password");
			//Session::flash('alert-class', 'alert-danger'); 
			//return redirect('login');
			return Redirect::back()
            ->withInput()
            ->withErrors(
                [
                    'password' => 'Wrong Password',
                ],
                [
                    'approve' => 'Account not approved',
                ],
            );
		}
	}
	
	function register(){
		return view('register');
	}
	
	function registerresult(){
		extract($_POST);
		$examdata = substr($examdata,0,-1);
		$password = Hash::make($password);
		$data=array('name'=>$name,'password'=>$password,"email"=>$email,"phone"=>$phone,"exam"=>$examdata,"photo"=>"","token"=>$_token);
		DB::table('users')->insert($data);
		return redirect('register');		
	}
	
	function home(){
		return view('home');
	}
}

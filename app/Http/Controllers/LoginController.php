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
	
	function user(){
		return view('user');
	}
	
	function loginresult(){
		$email =  $_POST['email'];
		$password = $_POST['password'];
		$userdata = array(
			'email'     => $email,
			'password'  => $password
		);
		// attempt to do the login
		if (Auth::attempt($userdata)) {
			return redirect('user');		
		} else {        
			echo "Error";
		}
	}
	
	function register(){
		return view('register');
	}
	
	function registerresult(){
		extract($_POST);
		if(isset($_POST['status']) && $_POST['status'] == 'exam'){
			$status = DB::select('SELECT * FROM `users` order by id DESC LIMIT 1');
			$id = $status[0]->id;
			$data=array('exam'=>$exam);
			$password = $_POST['new_password'];
			DB::update('update users set exam = ? where id = ?',[$exam,$id]);
			echo "You are Register Successfully. Please login now";
		}
		else{
			$password = Hash::make($password);
			$data=array('name'=>$name,'password'=>$password,"email"=>$email,"phone"=>0,"exam"=>0,"photo"=>0,"token"=>$_token);
			DB::table('users')->insert($data);	
		}
		
	}
	
	function home(){
		return view('home');
	}
}

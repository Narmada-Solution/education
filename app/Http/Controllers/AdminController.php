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


class AdminController extends BaseController
{
    public function __construct(){
    }
	
	function login(){
		return view('admin.login');
	}
	
	function jobsresult(){
		extract($_POST);
		$date = date('Y-m-d');
		$data=array('post_date'=>$date,'organization'=>$organization,"posts"=>$posts,"qualification"=>$qualification,"last_date"=>$last_date);
		DB::table('job')->insert($data);
		echo "New Job Add Successfully";
	}
	
	function loginresult(){
		/*if(Auth::check()){
		    return redirect('admin/login');
		}*/
		$email =  $_POST['email'];
		$password = $_POST['password'];
		$userdata = array(
			'email'     => $email,
			'password'  => $password
		);
		// attempt to do the login
		if (Auth::attempt($userdata)) {
			$userId = Auth::user()['id'];
			//return view('admin.index2',['user' => $userId]);
			//return redirect()->route('admin/dashboard', ['id' => $userId]);
			return redirect('admin/dashboard')->with('id', $userId);
		} else {        
			echo "Error";
		}
	}
	
	function logout(){
	 	Auth::logout();
		return redirect('admin/login');
	}
	function dashboard(){
		return view('admin.index2');
	}
	function jobs(){
		$userdata = DB::select('select * from job');
		return view('admin.jobs',['userdata' => $userdata ]);
	}
	function blog(){
		return view('admin.blog');
	}
	
}

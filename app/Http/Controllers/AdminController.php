<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function __construct(){
    }
	
	function dashboard(){
		return view('admin.index2');
	}
	function jobs(){
		return view('admin.jobs');
	}
	function blog(){
		return view('admin.blog');
	}
	
}

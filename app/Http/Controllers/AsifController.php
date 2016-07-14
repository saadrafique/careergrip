<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AsifController extends Controller
{
    //


    public function index()
    {
    	return view('Asif.index');
    }

 public function hello()
    {
        return view('Asif.hello');
    }
    
    public function index2()
    {
    	return view('Asif.index2');
    }
    public function index3()
    {
    	return view('Asif.index3');
    }
    public function jssignup()
    {
    	return view('Asif.jssignup');
    }
    public function jsprofile()
    {
    	return view('Asif.jsprofile');
    }
    public function emsignup()
    {
    	return view('Asif.emsignup');
    }
    public function login()
    {
    	return view('Asif.login');
    }
    public function jobseekers()
    {
        return view('Asif.jobseekers');
    }
    public function jobs()
    {
        return view('Asif.jobs');
    }

    public function emprofile()
    {
        return view('Asif.emprofile');
    }

    public function jobpost()
    {
        return view('Asif.jobpost');
    }

/* public function login1() {
    // Getting all post data
    if(Request::ajax()) {
      $data = Input::all();
      print_r($data);die;
    }
}*/
public function login1()
    {
        return view('Asif.login1');
    }
}

















<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Package;
use App\Http\Traits;
use App;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
      $count[0] = Package::where('profile_id',Auth::user()->profile_id)->get()->count();
      $count[1] = Package::where('profile_id',Auth::user()->profile_id)->where('status','pending')->get()->count();
      $count[2] = Package::where('profile_id',Auth::user()->profile_id)->where('status','transit')->get()->count();
      $count[3] = Package::where('profile_id',Auth::user()->profile_id)->where('status','delivered')->get()->count();

      return view('home',compact('count'));
    }
}

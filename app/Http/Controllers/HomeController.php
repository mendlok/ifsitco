<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
use App\Package;
use App\Profile;
use App\Http\Traits;
use App;
use DB;

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
      $profile = DB::table('users')
         ->join('profiles', 'profiles.id', '=', 'users.profile_id')
         ->select('profiles.*')->where('users.profile_id',Auth::user()->profile_id)->pluck('client_type')->toArray()[0];
      if ($profile === "admin") {
        $count[0] = Profile::all()->count();
        $count[1] = Package::all()->count();
        $count[2] = Package::all()->where('status','pending')->count();
        $count[3] = Package::all()->where('status','transit')->count();
        $count[4] = Package::all()->where('status','delivered')->count();
        return view('Adminviews\home_admin',compact('count'));
      }else {
        $count[0] = Package::where('profile_id',Auth::user()->profile_id)->get()->count();
        $count[1] = Package::where('profile_id',Auth::user()->profile_id)->where('status','pending')->get()->count();
        $count[2] = Package::where('profile_id',Auth::user()->profile_id)->where('status','transit')->get()->count();
        $count[3] = Package::where('profile_id',Auth::user()->profile_id)->where('status','delivered')->get()->count();

        return view('home',compact('count'));
      }

    }
}

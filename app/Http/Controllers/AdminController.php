<?php

namespace App\Http\Controllers;
use App\Package;
use App\Profile;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function allAlerts()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }

    public function alldelivered()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }

    public function allinTransit()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }

    public function allundelivered()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }

    public function newadmin()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('Adminviews\new_admin',compact('packages'));
    }

     public function serachprofileadmin()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('Adminviews\search_profile_admin',compact('packages'));
    }

     public function serachprofileclient()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('Adminviews\search_profile_client',compact('packages'));
    }

     public function adminhome()
    {
        return view('Adminviews\home_admin',compact('packages'));
    }
}

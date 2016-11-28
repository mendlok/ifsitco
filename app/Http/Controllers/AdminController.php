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
}

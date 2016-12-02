<?php

namespace App\Http\Controllers;
use App\Package;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function allPackages()
    {
      $packages = Package::all();
      $packages = Package::paginate(5);
      return view('Adminviews\PackageAdmin\admin_package_all',compact('packages'));
    }
    public function allAlerts()
    {
        $packages = Package::where('status','pending')->get();
        $packages = Package::paginate(5);
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }

    public function allDelivered()
    {
        $packages = Package::where('status','delivered')->get();
        $packages = Package::paginate(5);
        return view('Adminviews\PackageAdmin\Admin_package_delivered',compact('packages'));
    }

    public function allinTransit()
    {
        $packages = Package::where('status','transit')->get();
        $packages = Package::paginate(5);
        return view('Adminviews\PackageAdmin\Admin_package_transit',compact('packages'));
    }

    public function allundelivered()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        $packages = Package::paginate(5);
        return view('Adminviews\PackageAdmin\Admin_package_undeliverable',compact('packages'));
    }

    public function newadmin()
    {

        return view('Adminviews\new_admin');
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



     public function adminHome()
    {
        $count[0] = Profile::all()->count();
        $count[1] = Package::all()->count();
        $count[3] = Package::where('profile_id',Auth::user()->profile_id)->where('status','delivered')->get()->count();
        $count[4] = Package::where('profile_id',Auth::user()->profile_id)->where('status','transit')->get()->count();
        $count[5] = Package::where('profile_id',Auth::user()->profile_id)->where('status','pending')->get()->count();
        return view('Adminviews\home_admin',compact('count'));
    }

       public function allinfoPackage($tracking)
     {
       $data['tracking'] = $tracking;
       $date = Carbon::now();
       $date = $date->format('d-m-Y');
       $profile = DB::table('profiles')
            ->join('users', 'users.profile_id', '=', 'profiles.id')
            ->join('packages', 'packages.profile_id', '=', 'profiles.id')
            ->join('bills', 'bills.id', '=', 'packages.guide_id')
            ->select('users.*', 'profiles.*','packages.id as packages_ID','bills.*','packages.*')->where('packages.tracking',$tracking)
            ->get();
            return view('bills\Admin_see_bills', compact('profile','date'));
     }
}

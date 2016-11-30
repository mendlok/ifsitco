<?php

namespace App\Http\Controllers;
use App\Package;
use App\User;
use App\Profile;
use Illuminate\Http\Request;
use Auth;
use DB;
class AdminController extends Controller
{
    public function allPackages()
    {
      $packages = Package::all();
      return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }
    public function allAlerts()
    {
        $packages = Package::where('status','pending')->get();
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }

    public function allDelivered()
    {
        $packages = Package::where('status','delivered')->get();
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }

    public function allinTransit()
    {
        $packages = Package::where('status','transit')->get();
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
    }

    public function allundelivered()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('Adminviews\PackageAdmin\Admin_package_alert',compact('packages'));
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
       $profile = DB::table('profiles')
            ->join('users', 'users.profile_id', '=', 'profiles.id')
            ->join('packages', 'packages.profile_id', '=', 'profiles.id')
            ->select('users.*', 'profiles.*','packages.*')->where('packages.tracking',$tracking)
            ->get();
       return view('bills\Admin_see_bills', compact('profile'));
     }
}

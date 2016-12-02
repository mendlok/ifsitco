<?php

namespace App\Http\Controllers;
use App\Package;
use App\Profile;
use Illuminate\Http\Request;
use App\Bill;
use Auth;
use App\Status;
use DB;
use Carbon\Carbon;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        return view('package\new_package');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function mypackages()
     {

       $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
       $packages = Package::paginate(5);
       return view('package\my_packages',compact('packages'));

     }



    public function store(Request $request)
    {
        $bill = new Bill();
        $status = new Status();
        $bill ->save();
        $courrier = $request['carrier'];
        $tracking = $request['tracking'];
        $shop = $request['shop'];
        $value = $request['value'];
        $description = $request['description'];
        $package =  new Package();
        $package ->courrier = $courrier;
        $package ->tracking = $tracking;
        $package ->tracking = $tracking;
        $package ->shop = $shop;
        $package ->value = $value;
        $package ->product_description = $description;
        $package ->guide_id = $bill->id;
        $package->profile_id = Auth::user()->profile_id;
        $package->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showShopTracking(Request $request)
    {

      $track = $request['track'];
      $total = Package::where('tracking',$track)->where('profile_id',Auth::user()->profile_id)->get()->count();
      $package = Package::where('tracking',$track)->where('profile_id',Auth::user()->profile_id)->get();
      return view('search\search_tracking_shop',compact('package','total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function infoPackage($tracking)
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
      $status = $profile->pluck('status')->toArray()[0];
      if ($status === "pending") {
        return view('package\pending_package',compact('profile','date'));
      }else {
        return view('bills\see_bills', compact('profile','date'));
      }
     }


    public function destroy($id)
    {
        //
    }

     public function myAlerts()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->where('status','pending')->get();
        return view('package\alert_pending',compact('packages'));
    }

     public function holdInMiami()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->where('status','pending')->get();
        return view('package\retained',compact('packages'));
    }

    public function inTransit()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->where('status','transit')->get();
        return view('package\in_transit_miami',compact('packages'));
    }

    public function delivered()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->where('status','delivered')->get();
        return view('package\delivered',compact('packages'));
    }

    public function holdByInvoice()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('package\reten_bills_commer',compact('packages'));
    }

}

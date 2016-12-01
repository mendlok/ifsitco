<?php

namespace App\Http\Controllers;
use App\Package;
use App\Profile;
use Illuminate\Http\Request;
use App\Bill;
use Auth;
use App\Status;
class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
       $profile = Profile::where('id',Auth::user()->profile_id)->get();
       return view('bills\see_bills', compact('profile'));
     }


    public function destroy($id)
    {
        //
    }

     public function myAlerts()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('package\alert_pending',compact('packages'));
    }

     public function holdInMiami()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('package\retained',compact('packages'));
    }

    public function inTransit()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('package\in_transit_miami',compact('packages'));
    }

    public function delivered()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('package\delivered',compact('packages'));
    }

    public function holdByInvoice()
    {
        $packages = Package::where('profile_id',Auth::user()->profile_id)->get();
        return view('package\reten_bills_commer',compact('packages'));
    }

}

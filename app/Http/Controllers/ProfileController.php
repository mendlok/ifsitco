<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth\profile_example');
    }

    public function MyProfile()
    {
      $profile = Profile::where('id',Auth::user()->profile_id)->get();
      return view('profile\profile',compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $name = $request['name'];
      $last_name = $request['lastname'];
      $DNI = $request['id'];
      $birth_date = $request['shop'];
      $phone =  $request['phone'];
      $cellphone =  $request['cellphone'];
      $nacionality = $request['nacionality'];
      $provinces =  $request['province'];
      $canton =  $request['canton'];
      $district =  $request['district'];
      $address = $request['address'];
      $sex = $request['sex'];
      $email = $request['email'];
      $password = $request['password'];
      $profile = new Profile();
      $profile->name = $name;
      $profile->last_name = $last_name;
      $profile->client_type = "client";
      $profile->DNI = $DNI;
      $profile->sex = $sex;
      $profile->phone = $phone;
      $profile->cellphone = $cellphone;
      $profile->nacionality = $nacionality;
      $profile->provinces = $provinces;
      $profile->district = $district;
      $profile->address = $address;
      $profile->express = "yes";
      $profile->save();
      User::create([
      'name' => $request['name'],
      'email' => $request['email'],
      'password' => bcrypt($request['password']),
      'profile_id' => $profile->id
      ]);
      return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}

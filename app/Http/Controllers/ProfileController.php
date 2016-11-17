<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

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
      return view('profile\profile');
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
      $last_name = $request['last_name'];
      $DNI = $request['dni'];
      $birth_date = $request['shop'];
      $phone =  $request['phone'];
      $cellphone =  $request['cellphone'];
      $nacionality = "Costa Rica";
      $provinces =  "San Jose";
      $canton =  "Desamparados";
      $district =  "Desamparados";
      $address = $request['address'];
      $sex = $request['sex'];
      $email = $request['email'];
      $password = $request['password'];
      $profile = new Profile();
      $profile->name = "Kenneth";
      $profile->last_name = "Kenneth";
      $profile->client_type = "client";
      $profile->DNI = "1233456";
      $profile->sex = "m";
      $profile->phone = "1452552";
      $profile->nacionality = $nacionality;
      $profile->provinces = $provinces;
      $profile->district = $district;
      $profile->address = "412364454";
      $profile->express = "yes";
      $profile->save();
      return $profile->save();

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

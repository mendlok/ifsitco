<?php

namespace App\Http\Controllers;
use App\Bill;
use App\Package;
use Illuminate\Http\Request;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $number_pieces = $request['number_piecess'];
        $state = $request['stade'];
        $declared_value = $request['declared_value'];
        $weigth = $request['weigth'];
        $heigth = $request['height'];
        $long = $request['long'];
        $width = $request['width'];
        $description = Package::where('id','2')->pluck('product_description');
        $insurance = $request['insurance'];
        $freights = $request['freights'];
        $tax = $request['tax'];
        $discount = $request['discount'];


        $bill->declared_value = $declared_value;
        $bill->long = $long;
        $bill->width = $width;
        $bill->heigth = $heigth;
        $bill->number_pieces = $number_pieces;
        $bill->weigth = $weigth;
        $bill->description = $description->toArray()[0];

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

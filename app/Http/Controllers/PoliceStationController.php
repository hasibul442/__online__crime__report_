<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Policestation;
use App\Models\Upazila;
use Illuminate\Http\Request;

class PoliceStationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $division = Division::get();
        return view('admin.police-station.police-station',compact('division'));
    }

    public function getdistrict($id){
        $district = District::where('division_id', $id)->get();
        return response()->json($district);
    }

    public function getupazilla($district_id){
        $upazilla = Upazila::where('district_id', $district_id)->get();
        return response()->json($upazilla);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Policestation  $policestation
     * @return \Illuminate\Http\Response
     */
    public function show(Policestation $policestation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Policestation  $policestation
     * @return \Illuminate\Http\Response
     */
    public function edit(Policestation $policestation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Policestation  $policestation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Policestation $policestation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Policestation  $policestation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Policestation $policestation)
    {
        //
    }
}

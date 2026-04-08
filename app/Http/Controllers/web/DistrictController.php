<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Http\Requests\District\StoreDistrictRequest;
use App\Http\Requests\District\UpdateDistrictRequest;
use App\Models\City;
use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dirtricts=District::all();

        return view('districts.index',compact('dirtricts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities=City::all();

        return view('districts.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDistrictRequest $request)
    {
       $data=$request->validated();
        District::create($data);
        return redirect()->route('districts.index')->with('success', 'District created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district)
    {
        $cities=City::all();
        return view('districts.edit', compact('district', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistrictRequest $request, District $district)
    {
        $data = $request->validated();
        $district->update($data);

        return redirect()->route('districts.index')->with('success', 'District updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        $district->delete();

        return redirect()->route('districts.index')->with('error', 'District deleted successfully');
    }
}

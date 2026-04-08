<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\District\StoreDistrictRequest;
use App\Http\Requests\District\UpdateDistrictRequest;
use App\Http\Resources\DistrictResource;
use App\Models\District;
use Illuminate\Http\Request;

use App\Traits\ApiResponse;

class DistrictController extends Controller
{



    use ApiResponse;

    public function index()
    {


        $districts=District::all();


            if( $districts ->count() > 0){

         return $this->successResponse(200,'Districts Retrieved  SuccessFuly' , DistrictResource::collection($districts));
    

    }

    return $this->errorResponse(404,'Districts Not Found', null);

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDistrictRequest $request)
    {
        


    
    $data=$request->validated();

    $district=District::create($data);

   
    return $this->successResponse(201,'Disrict Created SuccessFuly', new DistrictResource($district));

        



    }


    public function show(District  $district){

    return $this->successResponse(200 ,'District Retrieved  SuccessFuly', new DistrictResource($district));




    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistrictRequest $request, District $district)
    {
        $data=$request->validated();

        $district->update($data);

        return  $this->successResponse(200,'District Upated SuccessFuly', new  DistrictResource($district));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        

         $district->delete();

    return $this->successResponse(200, 'District Deleted SuccessFuly' , null);

 





    }
}
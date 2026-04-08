<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\City\StoreCityRequest;
use App\Http\Requests\City\UpdateCityRequest;
use App\Http\Resources\CityResource;
use App\Traits\ApiResponse;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    


    use ApiResponse;

    public function index()
    {
        
        $cities=City::all();


            if( $cities ->count() > 0){

         return $this->successResponse(200,'cities Retrieved  SuccessFuly', CityResource::collection($cities));


            }

         return $this->errorResponse(404,'Cities Not Found', null);

         


    }

  
    public function store(StoreCityRequest $request)
    {
        
        $data=$request->validated();

       $city= City::create($data);

        return $this->successResponse(201,'City Created  SuccessFuly', new CityResource($city));



    }

 
    public function update(UpdateCityRequest $request, City $city)
    {
       
        $data= $request->validated();

        $city->update($data);


        return $this->successResponse('200', 'City Updated  SuccessFuly', new CityResource($city));


    }

    
    public function destroy(City $city)
    {
       

        $city->delete();


        return $this->successResponse('200', 'City Deleted  SuccessFuly', null);



    }
}

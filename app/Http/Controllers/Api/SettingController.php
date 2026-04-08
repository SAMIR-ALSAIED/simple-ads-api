<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Models\Setting;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    use ApiResponse;


    public function __invoke(Request $request)
    {

    $settings=Setting::find(1);


    if($settings){


    return  $this->successResponse(200,'Settings  Retrieved SuccessFuly', new SettingResource($settings));




    }

 return  $this->errorResponse(404,'Settings Not Found',null);



















    //  return new SettingResource($settings);
    

    // $settings= Setting::get();

    // return SettingResource::collection($settings);


    // return response()->json($st,200);

        
    }
}

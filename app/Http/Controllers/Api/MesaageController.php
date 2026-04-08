<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Message\StoreMessageRequest;
use App\Http\Resources\MessageResource;
use App\Models\Mesaage;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class MesaageController extends Controller
{

        use ApiResponse;
   
    public function index()
    {
        
        $messages=Mesaage::all();


            if( $messages ->count() > 0){

        return  $this->successResponse(200,'Messages retrieved successfully', MessageResource::collection($messages));

            }

        return $this->errorResponse(404,'Messages Not Found', null);



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
    
        $data=$request->validated();
    
        $message= Mesaage::create($data);

        return  $this->successResponse(201,'Message created successfully', new MessageResource($message));


    }

  

  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mesaage $message)
    {
        $message->delete();

        return $this->successResponse(200,'Message deleted successfully', null);

    }
}

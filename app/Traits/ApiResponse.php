<?php

namespace App\Traits;

trait ApiResponse
{

public function successResponse($code=200 ,$message = 'Success', $data = null)
    {
        $response = [
            'status' => true,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($response, $code);
    }


    public function errorResponse($code=400 ,$message = 'Error', $data = null)
    {
        $response = [
            'status' => false,
            'message' => $message,
            'data' => $data,
        ];

        return response()->json($response, $code);
    }

    
}

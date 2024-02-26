<?php

namespace App\Traits;

trait HttpResponses {

    protected function success($data , $messsage = null ,$code = 200) 
    {
        return response()->json([
            'status' => 'Request was successful',
            'message' => $message,
            'data' => $data
        ] ,$code);
    }

    protected function error($data , $messsage = null ,$code) 
    {
        return response()->json([
            'status' => 'Error has occured..',
            'message' => $message,
            'data' => $data
        ] ,$code);
    }

}

?>
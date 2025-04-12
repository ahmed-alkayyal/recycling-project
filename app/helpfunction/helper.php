<?php
    function responseJson($status,$massage,$data=null){
        $response=[
            'status'    =>$status,
            'massage'   =>$massage,
            'data'      =>$data
        ];
        return response()->json($response);
    }


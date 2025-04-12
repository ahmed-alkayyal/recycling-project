<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Waste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class WasteController extends Controller
{
    function responseJson($status,$massage,$data=null){
        $response=[
            'status'    =>$status,
            'massage'   =>$massage,
            'data'      =>$data
        ];
        return response()->json($response);
    }


    public function wastes(Request $request){
        $wastes=Waste::paginate(10);
        return $wastes;
    }

    public function addWastes(Request $request){
        $client=Auth::user()->id;
        // dd($client);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'img' => 'required|max:255',
            'type' => 'required|in:بطاريه,هاتف,لابتوب,شاشه',
            'status'    =>'required|in:جديد,مستعمل,مكسور',
        ]);
        if($validator->fails()){
            return $this->responseJson(0,$validator->errors()->first(),$validator->errors());
        }
        $waste=Waste::create($request->all());
        $waste->client_id=$client;
        $waste->save();
        return $this->responseJson(1,'تم الاضافه بنجاح',$waste);
    }
}

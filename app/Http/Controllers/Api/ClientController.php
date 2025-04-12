<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    function responseJson($status,$massage,$data=null){
        $response=[
            'status'    =>$status,
            'massage'   =>$massage,
            'data'      =>$data
        ];
        return response()->json($response);
    }

    public function show(){
        $clients=Client::all();
        return $clients;
    }
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:clients',
            'birth_date' => 'required|date',
            'addres'    =>'required',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);
        if($validator->fails()){
            return $this->responseJson(0,$validator->errors()->first(),$validator->errors());
        }
        // dd($validator);
        $request->merge(['password'=>bcrypt($request->password)]);
        $client=Client::create($request->all());
        $client->api_token= Str::random(40);
        $client->save();
        return $this->responseJson(1,'تم الاضافه بنجاح',[
            'api_token'=>$client->api_token,
            'client'=>$client
        ]);
        return $validator;
    }
    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // dd($validator);
        if($validator->fails()){
            return $this->responseJson(0,$validator->errors()->first(),$validator->errors());
        }
        $client=Client::where('email',$request->email)->first();
        if($client){
            if(Hash::check($request->password,$client->password)){
                return $this->responseJson(1,'البيانات  صحيحه',[
                    'api_token'=>$client->api_token,
                    'client'=>$client
                ]);
            }else{
                return $this->responseJson(0,'البيانات غير صحيحه');
            }
        }else{
            return $this->responseJson(0,'لا يوجد مستخدم بهذا الايميل');
        }
    }
    public function showData(Request $request){
        // dd($request->user());
        $client=$request->user();
        return $this->responseJson(1,'success',$client);
    }
    public function update_profile(Request $request){
        $client=$request->user();
        if($client){
            $client->name=$request->name;
            $client->email=$request->email;
            $client->birth_date=$request->birth_date;
            $client->addres=$request->addres;
            $client->phone=$request->phone;
            $client->password=bcrypt($request->password);
            $client->save();
        }else{
            return $this->responseJson(0,'لا يوجد عميل بهذهي البيانات',$client);
        }
        return $this->responseJson(1,'success',$client);
    }
}

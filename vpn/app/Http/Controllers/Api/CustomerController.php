<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Hash;
use App\Customer;


class CustomerController extends Controller
{
    
    public function login(Request $request){
        $user = Customer::where('name', $request->name)->first();
        
        if(!$user){
            return response()->json([
                    'success'=>false,
                    'message'=>'user not exist'
                ]);
        }
        else if($user && $user->enabled==1)
        {
             if(!Hash::check($request->input('password'), $user->password))
            {
                 return response()->json([
                    'success'=>false,
                    'message'=>'Wrong password'
                ]);
            }else{
               
            return response()->json([
                    'success'=>true,
                    'message'=>'user active'
                ]);
            }
           
        }
        
        else{

            if($user && $request->enabled==null){
            return response()->json([
                'success'=>false,
                'message'=>'user blocked'
            ]);
        }
        }
    }

}

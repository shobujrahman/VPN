<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;
use Hash;
use Session;

class CustomerController extends Controller
{
     public function index(){
        session::put('page','customer');
        $customers = Customer::all();
        return view('customer.index', compact('customers'))->with('no',1);
    }

     public function create(){
        return view('customer.create');
    }

    public function store(Request $request)
    {
   
            $validatedData = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            
            ]);

            $customer = new Customer;

            

            $customer->name = $request->input('name');
            $customer->email = $request->input('email');
            $customer->password =  Hash::make($request->input('password'));
            $customer->enabled = $request->input('enabled');
        
            $customer->save();
            
            if($customer){
                $notification=array(
                    'message'=>' Customer added Successfully',
                    'alert-type'=>'success'
                );
                return redirect('/customer/index')->with($notification);
            }else{
                $notification=array(
                    'message'=>'Something went wrong',
                    'alert-type'=>'error'
                );
                return redirect()->back()->with($notification);
            }
            
    }


    public function edit($id){
        $data= Customer::where('id',$id)->first();
        return view('customer.edit', compact('data'));
    }



    public function update(Request $request, $id){
            $customer = Customer::find($id);

               
            $customer->name = $request->input('name');
            $customer->email = $request->input('email');
            // $customer->password = $request->input('password');
            $customer->enabled = $request->input('enabled');
            $customer->update();
                
             
            if($customer)
        {
            $notification=array(
                'message'=>'Successfully updated customer',
                'alert-type'=>'success'
            );
            return redirect('/customer/index')->with($notification);
        }
        else
        {
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function destroy($id){
        $data = Customer::find($id);
        $data->delete();
        $notification=array(
                'message'=>'Customer Deleted Successfully!',
                'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
    }
}

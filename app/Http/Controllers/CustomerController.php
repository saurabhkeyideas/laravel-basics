<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;

class CustomerController extends Controller
{
    public function index(){
       $url=url('/customer');
       $title="Customer Registration";
       $data=compact('url','title');
       return view('customer')->with($data);



        // return view('customer');
    }
    
    //Post
    public function store(Request $request){
        // echo "<pre>";
        // print_r($request->all());

        //Insert Query
        $customer=new Customers;
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];
        $customer->dob=$request['dob'];
        $customer->password=md5($request['password']);
        $customer->save();
        echo "Data Submitted";

        return redirect('/customer/view');

    }
     //Get
    public function view(){
        $customers=Customers::all();
        $data=compact('customers');
        // echo "<pre>";
        // print_r($customers->toArray());
        // echo "</pre>";
        return view('customer-view')->with($data);
    }
    //Delete 
    public function delete($id){

        $customer=Customers::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }

        return redirect('/customer/view');

        //Other method 
        // Customers::find($id)->delete();
        // return redirect()->back();
    }
   
    // This function is basically to fill the old data after edit button
    public function edit($id){
        $customer=Customers::find($id);
        if(is_null($customer)){
            return redirect('/customer/view');
        }else{
            $title="Update Customer";
            $url=url('/customer/update')."/".$id;
            $data=compact('customer','url','title');
            return view ('customer')->with($data);
        }
    }

    //This function is for submiting the updated data for same user with given id
    public function update($id,Request $request){
        $customer=Customers::find($id);
        $customer->name=$request['name'];
        $customer->email=$request['email'];
        $customer->gender=$request['gender'];
        $customer->address=$request['address'];
        $customer->state=$request['state'];
        $customer->country=$request['country'];
        $customer->dob=$request['dob'];
        $customer->save();
        return redirect('customer/view');
    }

}

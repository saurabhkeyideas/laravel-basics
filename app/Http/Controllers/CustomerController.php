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
    public function view(Request $request){
         
        $search=$request['search']??"";
        if($search!=""){
            $customers=Customers::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->paginate(10);
       
            // $customers=Customers::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();

        }
        else{
            $customers=Customers::paginate(10);
            // $customers=Customers::all();
        }

       
        $data=compact('customers','search');
        return view('customer-view')->with($data);
        //To get all data
        // $customers=Customers::all();
        // $data=compact('customers');
        // return view('customer-view')->with($data);

        // echo "<pre>";
        // print_r($customers->toArray());
        // echo "</pre>";
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

    // public function upload(Request $request){
    //     // echo "<pre>";
    //     // print_r($request->all());

    //     // $fileName=time()."sks".$request->file('image')->getClientOriginalExtension();
    //      echo $request->file('image')->store('uploads');
    // }
    public function upload(Request $request)
                                         {
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('uploads');
        // You can do more with the $path, like storing it in the database.
        return "File uploaded successfully!";
    } else {
        return "No file was uploaded.";
    }
}


}

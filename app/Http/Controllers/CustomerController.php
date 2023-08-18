<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    public function index()
    {
        $url = url('/customer');
        $title = 'Add User';
        return view('customer', compact('url', 'title'));
    }

        // Data Save on xampp

    public function register(Request $request)
    {
        $user = new customer;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->save();
        return back();
    }
    //show data in view page
    public function show(Request $request)
    {
        // $user = customer::paginate(10);
        $search = $request['search'] ?? "";
        if ($search != "") {
            // Where
            $user = Customer::where('name', 'LIKE', "$search%")->orWhere('email', 'LIKE', "$search%")->get(); 
        } else {
            $user = Customer::all();
        }
        
        return view('customer-view' , compact('user','search'));
    }

    //edit user data
    
    public function edit($id){
    
        $user = Customer::findOrFail($id);
        $title = 'Update User';
        $url = url('/customer/update') . "/" . ($id);
        return view('customer', compact('user', 'url', 'title'));
    }

    // public function update()

    public function update (Request $request, $id){

        $user = Customer::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect('/customer/view');
    }

    //user data delete
    public function remove($id){

        $user = Customer::findOrfail($id);
        $user ->delete();    
        return redirect('/customer/view');
    }

    public function trash()
    {
        $user = customer::onlyTrashed()->get();
        return view('trash', compact('user'));
    }

    public function restore($id){
        
        $user = Customer::withTrashed()->findOrfail($id);
        $user ->restore();    
        return redirect('/customer/trash');
    }

    public function delete($id){
        $user = Customer::withTrashed()->findOrfail($id);
        $user ->forcedelete();    
        return redirect('/customer/trash');
    }

}

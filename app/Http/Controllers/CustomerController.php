<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
       $data=CustomerModel::get();
       
        return view('customer.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'shipping_address'=>'required',
        ]);
        
// Create a new item record in the database
CustomerModel::create($request->all());

// Redirect to the index page with a success message
return redirect()->route('customer.index')->with('success', 'Item added successfully.');
    
    }

   
    public function show(CustomerModel $customerModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $datanew = CustomerModel::find($id);

        return view('customer.edit', compact('datanew'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $customer = CustomerModel::findOrFail($id);
    
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'shipping_address'=>'required',
        ]);
    
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->shipping_address = $request->input('shipping_address');
    
        $customer->save();
    
        return redirect()->route('customer.index')->with('success', 'Customer details updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerModel $datanew , $id)
    {
        $customer = CustomerModel::findOrFail($id);

        $customer->delete();
        return redirect()->route('customer.index')->with('success', 'Customer Deleted successfully.');
    }
}

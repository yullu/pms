<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
    public function index()
    {
        $title = 'Customers';
        $list = Customer::all();
        return view('admin.customers.list', compact('list','title'));
    }
    public function add()
    {
        return view('admin.customers.add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'contact_number'=>'required',
            'address'=>'required',
            'doctor_name'=>'required',
        ]);
        $customer = new Customer();
        $customer->name = trim($request->name);
        $customer->contact_number = trim($request->contact_number);
        $customer->address = trim($request->address);
        $customer->doctor_name = trim($request->doctor_name);
        $customer->doctor_address = trim($request->doctor_address);
        $customer->save();

        return redirect()->route('customers')->with('success','Customer added successfully');
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.customers.edit', compact('customer'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'contact_number'=>'required',
            'address'=>'required',
            'doctor_name'=>'required',
        ]);
        $customer = Customer::find($id);
        $customer->name = trim($request->name);
        $customer->contact_number = trim($request->contact_number);
        $customer->address = trim($request->address);
        $customer->doctor_name = trim($request->doctor_name);
        $customer->doctor_address = trim($request->doctor_address);
        $customer->update();

        return redirect()->route('customers')->with('success','Customer updated successfully');

    }
    public function destroy($id)
    {
        $delete = Customer::find($id);
        $delete->delete();

        return redirect()->route('customers')->with('success','Customer deleted successfully');

    }
}

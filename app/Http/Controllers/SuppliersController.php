<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index()
    {
        $title = 'Suppliers';
        $suppliers = Supplier::all();
        return view('admin.suppliers.list',compact('suppliers','title'));
    }
    public function add()
    {

        return view('admin.suppliers.add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'supplier_name'=>'required',
            'supplier_phone'=>'required',
            'supplier_email'=>'required',
            'supplier_address'=>'required',
        ]);

        $supplier = new Supplier();
        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_phone = $request->supplier_phone;
        $supplier->supplier_email = $request->supplier_email;
        $supplier->supplier_address = $request->supplier_address;
        $supplier->save();
        return redirect()->route('suppliers')->with('success','Supplier created successfully');

    }
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('admin.suppliers.edit',compact('supplier'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'supplier_name'=>'required',
            'supplier_phone'=>'required',
            'supplier_email'=>'required',
            'supplier_address'=>'required',
        ]);
        $supplier = Supplier::find($id);
        $supplier->supplier_name = $request->supplier_name;
        $supplier->supplier_phone = $request->supplier_phone;
        $supplier->supplier_email = $request->supplier_email;
        $supplier->supplier_address = $request->supplier_address;
        $supplier->update();
        return redirect()->route('suppliers')->with('success','Supplier updated successfully');
    }
    public function destroy($id)
    {
        $delete = Supplier::find($id)->delete();
        return redirect()->route('suppliers')->with('success','Supplier deleted successfully');
    }
}

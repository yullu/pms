<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\MedicinesStock;
use Illuminate\Http\Request;

class medicinesController extends Controller
{
    public function index()
    {
        $title = 'Medicine';
        $medicines = Medicine::all();
        return view('admin.medicines.list',compact('medicines','title'));
    }
    public function add()
    {
        return view('admin.medicines.add');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'packing'=>'required',
            'generic_name'=>'required',
        ]);

        $medicine = new Medicine();
        $medicine->name= $request->name;
        $medicine->packing= $request->packing;
        $medicine->name= $request->name;
        $medicine->generic_name= $request->generic_name;
        $medicine->supplier_name= $request->supplier_name;
        $medicine->save();
        return redirect()->route('medicines')->with('success','Medicine added successfully');

    }
    public function edit($id)
    {
        $medicines = Medicine::find($id);
        return view('admin.medicines.edit',compact('medicines'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'packing'=>'required',
            'generic_name'=>'required',
        ]);
        $medicine = Medicine::find($id);
        $medicine->name= $request->name;
        $medicine->packing= $request->packing;
        $medicine->name= $request->name;
        $medicine->generic_name= $request->generic_name;
        $medicine->supplier_name= $request->supplier_name;
        $medicine->update();

        return redirect()->route('medicines')->with('success','Medicine updated successfully');

    }
    public function destroy($id)
    {
        $medicine = Medicine::find($id);
        $medicine->delete();

        return redirect()->route('medicines')->with('success','Medicine deleted successfully');
    }
    public function medicines_stock()
    {
        $medicinesstock = MedicinesStock::all();
        return view('admin.medicines_stock.list', compact('medicinesstock'));
    }
    public function medicines_stock_add()
    {
        $medicines = Medicine::all();
        return view('admin.medicines_stock.add', compact('medicines'));
    }
    public function medicines_stock_save(Request $request)
    {
        $this->validate($request,[
            'batch_id'=>'required',
            'expiry_date'=>'required',
            'quantity'=>'required',
            'mrp'=>'required',
            'rate'=>'required',
        ]);
        $medicines_stock = new MedicinesStock();
        $medicines_stock->medicine_id = $request->medicine_id;
        $medicines_stock->batch_id = $request->batch_id;
        $medicines_stock->expiry_date = $request->expiry_date;
        $medicines_stock->quantity = $request->quantity;
        $medicines_stock->mrp = $request->mrp;
        $medicines_stock->rate = $request->rate;
        $medicines_stock->save();

        return redirect()->route('medicines_stock')->with('success','Medicines Stock added successfully');

    }
    public function medicines_stock_edit($id)
    {
        $medicines = Medicine::all();
        $medicinestock = MedicinesStock::find($id);
            return view('admin.medicines_stock.edit', compact('medicinestock','medicines'));
    }
    public function medicines_stock_update(Request $request, $id)
    {
        $this->validate($request,[
            'batch_id'=>'required',
            'expiry_date'=>'required',
            'quantity'=>'required',
            'mrp'=>'required',
            'rate'=>'required',
        ]);
        $medicines_stock = MedicinesStock::find($id);
        $medicines_stock->medicine_id = $request->medicine_id;
        $medicines_stock->batch_id = $request->batch_id;
        $medicines_stock->expiry_date = $request->expiry_date;
        $medicines_stock->quantity = $request->quantity;
        $medicines_stock->mrp = $request->mrp;
        $medicines_stock->rate = $request->rate;
        $medicines_stock->update();

        return redirect()->route('medicines_stock')->with('success','Medicines Stock updated successfully');

    }
    public function medicines_stock_delete($id)
    {
        $deleting = MedicinesStock::find($id);
        $deleting->delete();
        return redirect()->route('medicines_stock')->with('success','Medicines Stock deleted successfully');

    }
}

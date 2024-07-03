<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Purchase;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function index()
    {
        $title = 'Purchases';
        $purchases = Purchase::all();
        return view('admin.purchases.list',compact('purchases','title'));
    }
    public function add()
    {
        $suppliers = Supplier::all();
        $invoices = Invoice::all();
        return view('admin.purchases.add', compact('suppliers','invoices'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'supplier_id'=>'required',
            'invoice_id'=>'required',
            'voucher_number'=>'required',
            'purchase_date'=>'required',
            'total_amount'=>'required',
            'payment_status'=>'required',
        ]);
        $purchases = new Purchase();
        $purchases->supplier_id = $request->supplier_id;
        $purchases->invoice_id = $request->invoice_id;
        $purchases->voucher_number = $request->voucher_number;
        $purchases->purchase_date = $request->purchase_date;
        $purchases->total_amount = $request->total_amount;
        $purchases->payment_status = $request->payment_status;
        $purchases->save();
        return redirect()->route('purchases')->with('success','Purchase added successfully');

    }
    public function edit($id)
    {
        $editsuppliers = Purchase::find($id);
        $suppliers = Supplier::all();
        $invoices = Invoice::all();
        return view('admin.purchases.edit',compact('editsuppliers','suppliers','invoices'));

    }
    public function updating(Request $request,$id)
    {
        $this->validate($request,[
            'supplier_id'=>'required',
            'invoice_id'=>'required',
            'voucher_number'=>'required',
            'purchase_date'=>'required',
            'total_amount'=>'required',
            'payment_status'=>'required',
        ]);
        $purchases = Purchase::find($id);
        $purchases->supplier_id = $request->supplier_id;
        $purchases->invoice_id = $request->invoice_id;
        $purchases->voucher_number = $request->voucher_number;
        $purchases->purchase_date = $request->purchase_date;
        $purchases->total_amount = $request->total_amount;
        $purchases->payment_status = $request->payment_status;
        $purchases->update();

        return redirect()->route('purchases')->with('success','Purchase updated successfully');
    }
    public function destroy($id)
    {
        $purchases = Purchase::find($id);
        $purchases->delete();
        return redirect()->route('purchases')->with('success','Purchase deleted successfully');
    }


}

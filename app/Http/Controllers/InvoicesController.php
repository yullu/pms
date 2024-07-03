<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $title = 'Invoices';
        $invoices  = Invoice::all();
        return view('admin.invoices.list', compact('invoices','title'));
    }
    public function add()
    {
        $customers = Customer::all();
        return view('admin.invoices.add', compact('customers'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'net_total' => 'required',
            'invoice_date'=>'required',
            'total_amount'=>'required',
            'total_discount'=>'required',
        ]);

        $invoice = new Invoice();
        $invoice->customer_id = $request->customer_id;
        $invoice->net_total = $request->net_total;
        $invoice->invoice_date = $request->invoice_date;
        $invoice->total_amount = $request->total_amount;
        $invoice->total_discount = $request->total_discount;
        $invoice->save();
        return redirect()->route('invoices')->with('success', 'Invoice Added Successfully');

    }
    public function edit($id)
    {
        $customers = Customer::all();
        $invoices = Invoice::find($id);
        return view('admin.invoices.edit',compact('customers','invoices'));
    }
    public function updating(Request $request,$id)
    {
        $request->validate([
            'net_total' => 'required',
            'invoice_date'=>'required',
            'total_amount'=>'required',
            'total_discount'=>'required',
        ]);

        $invoice = Invoice::find($id);
        $invoice->customer_id = $request->customer_id;
        $invoice->net_total = $request->net_total;
        $invoice->invoice_date = $request->invoice_date;
        $invoice->total_amount = $request->total_amount;
        $invoice->total_discount = $request->total_discount;
        $invoice->update();

        return redirect()->route('invoices')->with('success', 'Invoice Updated Successfully');

    }
    public function destroy($id)
    {
        $invoices = Invoice::find($id)->delete();
        return redirect()->route('invoices')->with('success', 'Invoice Deleted Successfully');
    }
}

@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Add Purchases</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/purchases') }}">Home</a></li>
                <li class="breadcrumb-item active">Purchases</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section>
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <form method="post" action="{{ url('admin/purchases/updating/'.$editsuppliers->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Supplier Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <select name="supplier_id" class="form-control">
                                        <option value="">Select Supplier</option>
                                        @foreach($suppliers as $supplier)
                                            <option {{ ($supplier->id == $editsuppliers->supplier_id) ? 'selected':''  }} value="{{ $supplier->id }}">{{ $supplier->supplier_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('supplier_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Invoice ID <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <select name="invoice_id" class="form-control">
                                        <option value="">Select Invoice ID</option>
                                        @foreach($invoices as $invoice)
                                            <option {{ ($invoice->id == $editsuppliers->invoice_id) ? 'selected':'' }} value="{{ $invoice->id }}">{{ $invoice->id }}</option>
                                        @endforeach
                                    </select>
                                    @error('invoice_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Voucher Number <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="voucher_number" class="form-control" value="{{ $editsuppliers->voucher_number }}">
                                    @error('voucher_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Purchase Date <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="purchase_date" class="form-control" value="{{ $editsuppliers->purchase_date }}">
                                    @error('purchase_date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Total Amount <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_amount" class="form-control" value="{{ $editsuppliers->total_amount }}">
                                    @error('total_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Payment Status  <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <select name="payment_status" class="form-control">
                                        <option value="">Select Status</option>
                                        <option value="1">Pending</option>
                                        <option value="2">Accept</option>
                                        <option value="3">Cancel</option>
                                    </select>
                                    @error('payment_status')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Save Purchases</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

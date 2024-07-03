@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Add Invoices</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/invoices') }}">Home</a></li>
                <li class="breadcrumb-item active">Invoices</li>
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
                        <form method="post" action="{{ url('admin/invoices/save') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Customer Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="customer_id">
                                        <option value="">Select Customer</option>
                                        @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                        @endforeach

                                    </select>
                                    @error('medicine_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Net Total <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="net_total" class="form-control" value="{{ old('net_total') }}">
                                    @error('net_total')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Invoice Date <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" name="invoice_date" class="form-control" value="{{ old('invoice_date') }}">
                                    @error('invoice_date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Total Amount </label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_amount" class="form-control" value="{{ old('total_amount') }}">
                                    @error('total_amount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Total Discount </label>
                                <div class="col-sm-10">
                                    <input type="text" name="total_discount" class="form-control" value="{{ old('total_discount') }}">
                                    @error('total_discount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Save Invoice</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

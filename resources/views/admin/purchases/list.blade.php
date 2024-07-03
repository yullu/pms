@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Purchases List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
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
                        <h5 class="card-title"><a class="btn btn-primary" href="{{ url('admin/purchases/add') }}"> Add Purchases</a></h5>
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Supplier Name </th>
                                <th scope="col">Invoice Id </th>
                                <th scope="col">Voucher Number </th>
                                <th scope="col">Purchase Date </th>
                                <th scope="col">Total Amount </th>
                                <th scope="col">Payment Status </th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($purchases as $purchase)
                                <tr>
                                    <th scope="col">{{ $purchase->id }}</th>
                                    <th scope="col">{{ $purchase->getsupplier->supplier_name }}</th>
                                    <th scope="col">{{ $purchase->invoice_id }}</th>
                                    <th scope="col">{{ $purchase->voucher_number }}</th>
                                    <th scope="col">{{ date('d-m-Y', strtotime($purchase->purchase_date)) }}</th>
                                    <th scope="col">{{ $purchase->total_amount }}</th>
                                    <th scope="col">
                                        @if($purchase->payment_status == 1)
                                            Pending
                                        @elseif($purchase->payment_status == 2)
                                            Accept
                                        @elseif($purchase->payment_status == 3)
                                            Cancel
                                        @endif
                                    </th>

                                    <td>

                                        <a href="{{ url('admin/purchases/edit/'.$purchase->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('admin/purchases/delete/'.$purchase->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="bi bi-trash"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


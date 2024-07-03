@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Invoices List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
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
                        <h5 class="card-title"><a class="btn btn-primary" href="{{ url('admin/invoices/add') }}"> Add Invoice</a></h5>

                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Invoice Date </th>
                                <th scope="col">Net Total</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">total Discount</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoices as $invoice)
                                <tr>
                                    <th scope="col">{{ $invoice->id }}</th>
                                    <td>{{ $invoice->getcustomer->name }}</td>
                                    <td>{{ date('d-m-Y', strtotime($invoice->invoice_date)) }}</td>
                                    <td>{{ $invoice->net_total }}</td>
                                    <td>{{ $invoice->total_amount }}</td>
                                    <td>{{ $invoice->total_discount }}</td>
                                    <td>

                                        <a href="{{ url('admin/invoices/edit/'.$invoice->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('admin/invoices/delete/'.$invoice->id )}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="bi bi-trash"></i></a>

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


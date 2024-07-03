@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Suppliers List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Suppliers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section>
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a class="btn btn-primary" href="{{ url('admin/suppliers/add') }}"> Add Supplier</a></h5>
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Supplier Name</th>
                                <th scope="col">Supplier Email</th>
                                <th scope="col">Supplier Phone</th>
                                <th scope="col">Suppliers Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($suppliers as $supplier)
                                <tr>
                                    <th scope="col">{{ $supplier->id }}</th>
                                    <td>{{ $supplier->supplier_name }}</td>
                                    <td>{{ $supplier->supplier_email }}</td>
                                    <td>{{ $supplier->supplier_phone }}</td>
                                    <td>{{ $supplier->supplier_address }}</td>
                                    <td>

                                        <a href="{{ url('admin/suppliers/edit/'.$supplier->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('admin/suppliers/delete/'.$supplier->id )}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="bi bi-trash"></i></a>

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

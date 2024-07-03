@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Customers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Customers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section>
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a class="btn btn-primary" href="{{ url('admin/customers/add') }}"> Add Customer</a></h5>
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Doctors Name</th>
                                <th scope="col">Doctors Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $lists)
                            <tr>
                                <th scope="col">{{ $lists->id }}</th>
                                <td>{{ $lists->name }}</td>
                                <td>{{ $lists->contact_number }}</td>
                                <td>{{ $lists->address }}</td>
                                <td>{{ $lists->doctor_name }}</td>
                                <td>{{ $lists->doctor_address }}</td>
                                <td>

                                    <a href="{{ url('admin/customers/edit/'.$lists->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="{{ url('admin/customers/delete/'.$lists->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="bi bi-trash"></i></a>

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

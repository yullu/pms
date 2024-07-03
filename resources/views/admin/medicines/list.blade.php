@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Medicines</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Medicines</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section>
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a class="btn btn-primary" href="{{ url('admin/medicines/add') }}"> Add Medicine</a></h5>
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Drug Name</th>
                                <th scope="col">Packing</th>
                                <th scope="col">Generic Name</th>
                                <th scope="col">Suppliers Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($medicines as $medicine)
                                <tr>
                                    <th scope="col">{{ $medicine->id }}</th>
                                    <td>{{ $medicine->name }}</td>
                                    <td>{{ $medicine->packing }}</td>
                                    <td>{{ $medicine->generic_name }}</td>
                                    <td>{{ $medicine->supplier_name }}</td>
                                    <td>

                                        <a href="{{ url('admin/medicines/edit/'.$medicine->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('admin/medicines/delete/'.$medicine->id )}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="bi bi-trash"></i></a>

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

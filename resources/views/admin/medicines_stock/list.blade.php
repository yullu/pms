@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Medicines Stock List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Medicines Stock</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section>
        <div class="row">
            <div class="col-lg-12">
                @include('_message')
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><a class="btn btn-primary" href="{{ url('admin/medicines_stock/add') }}"> Add Medicine Stock</a></h5>
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Medicine Name</th>
                                <th scope="col">Batch ID</th>
                                <th scope="col">Expiry Date</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Mrp</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medicinesstock as $medicine)
                                <tr>
                                    <th scope="col">{{ $medicine->id }}</th>
                                    <td>{{ $medicine->getmedicinename->name }}</td>
                                    <td>{{ $medicine->batch_id }}</td>
                                    <td>{{ date('d-m-Y', strtotime($medicine->expiry_date)) }}</td>
                                    <td>{{ $medicine->quantity }}</td>
                                    <td>{{ $medicine->mrp }}</td>
                                    <td>{{ $medicine->rate }}</td>
                                    <td>

                                        <a href="{{ url('admin/medicines_stock/edit/'.$medicine->id) }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                        <a href="{{ url('admin/medicines_stock/delete/'.$medicine->id )}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"><i class="bi bi-trash"></i></a>

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


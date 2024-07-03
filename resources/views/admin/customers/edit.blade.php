@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Edit Customer </h1>
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
                        <h5 class="card-title"></h5>
                        <form method="post" action="{{ url('admin/customers/edit/'.$customer->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Customer Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ $customer->name }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Contact Number <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" name="contact_number" class="form-control" value="{{ $customer->contact_number }}">
                                    @error('contact_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Address <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control" value="{{ $customer->address }}">
                                    @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Doctors Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="doctor_name" class="form-control" value="{{ $customer->doctor_name }}">
                                    @error('doctor_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Doctors Address <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="doctor_address" class="form-control" value="{{ $customer->doctor_address }}">
                                    @error('doctor_address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-secondary">Update Customer</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



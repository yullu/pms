@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Edit Supplier</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/suppliers') }}">Home</a></li>
                <li class="breadcrumb-item active">Suppliers </li>
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
                        <form method="post" action="{{ url('admin/suppliers/updating/'.$supplier->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Supplier Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="supplier_name" class="form-control" value="{{ $supplier->supplier_name }}">
                                    @error('supplier_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Supplier Email <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="email" name="supplier_email" class="form-control" value="{{ $supplier->supplier_email }}">
                                    @error('supplier_email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Supplier Phone </label>
                                <div class="col-sm-10">
                                    <input type="text" name="supplier_phone" class="form-control" value="{{ $supplier->supplier_phone }}">
                                    @error('supplier_phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Supplier Address </label>
                                <div class="col-sm-10">
                                    <input type="text" name="supplier_address" class="form-control" value="{{ $supplier->supplier_address }}">
                                    @error('supplier_address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>


                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Save Edit Supplier</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


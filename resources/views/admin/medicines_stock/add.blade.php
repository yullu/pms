@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Add Medicine Stock</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/medicines_stock') }}">Home</a></li>
                <li class="breadcrumb-item active">Medicine Stock</li>
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
                        <form method="post" action="{{ url('admin/medicines_stock/save') }}">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Medicine Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="medicine_id">
                                        <option value="">Select Medicine Name</option>
                                        @foreach($medicines as $medicine)
                                            <option value="{{ $medicine->id }}">{{ $medicine->name }}</option>
                                        @endforeach

                                    </select>
                                    @error('medicine_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Batch Id <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="batch_id" class="form-control" value="{{ old('batch_id') }}">
                                    @error('batch_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Expiry_date <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="date" name="expiry_date" class="form-control" value="{{ old('expiry_date') }}">
                                    @error('expiry_date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Quantity </label>
                                <div class="col-sm-10">
                                    <input type="text" name="quantity" class="form-control" value="{{ old('quantity') }}">
                                    @error('quantity')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Mrp </label>
                                <div class="col-sm-10">
                                    <input type="text" name="mrp" class="form-control" value="{{ old('mrp') }}">
                                    @error('mrp')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Rate </label>
                                <div class="col-sm-10">
                                    <input type="text" name="rate" class="form-control" value="{{ old('rate') }}">
                                    @error('rate')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Save Medicine Stock</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


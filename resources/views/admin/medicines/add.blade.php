@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Add Medicine</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/medicines') }}">Home</a></li>
                <li class="breadcrumb-item active">Medicine</li>
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
                        <form method="post" action="{{ url('admin/medicines') }}">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Drug Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Packing <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="packing" class="form-control" value="{{ old('packing') }}">
                                    @error('packing')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Generic Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="generic_name" class="form-control" value="{{ old('generic_name') }}">
                                    @error('generic_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Suppliers Name </label>
                                <div class="col-sm-10">
                                    <input type="text" name="supplier_name" class="form-control" value="{{ old('supplier_name') }}">
                                    @error('supplier_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Save Drug</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

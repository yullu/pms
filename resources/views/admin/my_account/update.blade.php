@extends('admin.layouts.app')
@section('content')
    <div class="pagetitle">
        <h1>Profile Update</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
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
                        <form method="post" action="{{ url('admin/dashboard/my_account/save') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Name <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Email <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Profile Photo <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    <input type="file" name="profile_photo" class="form-control" >
                                    @if(!empty($user->profile_photo))
                                        <img src="{{ asset('uploads/profile_photo/'.$user->profile_photo) }}" height="100px" width="100px">
                                    @endif
                                    @error('profile_photo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel">Password <span style="color: red;">*</span></label>
                                <div class="col-sm-10">
                                    (Leave it blank if not planning to change password)
                                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-formlabel"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success">Update Profile</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



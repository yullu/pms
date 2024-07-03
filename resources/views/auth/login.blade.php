@extends('layouts.app')
@section('main-content')
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        @php
                            $getlogo = App\Models\Setting::first();
                        @endphp
                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="{{ asset('uploads/logo/'.$getlogo->website_logo) }}" alt="">
                                <span class="d-none d-lg-block">{{ $getlogo->name }}</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    @include('_message')
                                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>

                                <form class="row g-3 needs-validation" method="post" action="{{ url('login_post') }}">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email Address</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person"></i></span>
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock"></i></span>
                                        <input type="password" name="password" class="form-control" id="yourPassword">
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" >
                                            <label class="form-check-label">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Forgot Account? <a href="{{ url('forgot') }}">Forgot Account</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="credits">

                            Designed by <a href="#">eMaster Developers</a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
@endsection

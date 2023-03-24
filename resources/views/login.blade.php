@extends('templates.landingTemplate')
@section('title', 'Login')
@section('content')
    <div class="container-lg">
        <div class="row my-5">
            <div class="col-9 col-sm-7 col-md-5 col-lg-4 p-4 rounded-3 d-flex flex-column">
                <form enctype="multipart/form-data" action="{{ route('login') }}" method="POST">
                    @csrf
                    <h4 class="mt-3 mb-4 text-decoration-underline">Login</h4>

                    @error('failed')
                        <div class="alert alert-danger d-flex alert-dismissible fade show">
                            <i data-feather="alert-triangle"style="margin-right: 0.5em; width: 1.5em"></i>
                            {{ $message }}
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert"
                                aria-label="close"></button>
                        </div>
                    @enderror

                    <div class="email d-flex">
                        <label class="form-label w-50 mt-1">Email Address:</label>
                        <div class="form m-0 p-0">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="password mt-3 d-flex">
                        <label class="form-label w-50 mt-1">Password: </label>
                        <div class="form m-0 p-0">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror">

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="w-100 d-flex justify-content-center">
                        <button type="submit" class="w-75 button mt-5">Login</a>
                    </div>

                    <div class="mt-1 mb-3 to-register text-center">
                        <a href="{{ route('register') }}">Don'have account? click here to sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

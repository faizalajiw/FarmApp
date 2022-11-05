@extends('layouts.auth', ['title' => 'Forgot Password Admin'])

@section('content')
    <div id="auth">
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/"><img src="{{ asset('images/logo/favicon.svg') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Update Password</h1>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="auth-subtitle mb-5">Input your new password and confirm your password. </p>
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf

                        <div class="form-group position-relative has-icon-left mb-4">

                            <input type="hidden" name="token" value="{{$request->route('token')}}">
                            <input type="email" class="form-control form-control-xl mt-3" name="email" placeholder="Email" value="{{$request->email ?? old('email')}}">
                                 @error('email')
                                <div class="alert alert-success mt-3">
                                    <p class="">{{ $message }}</p>
                                </div>
                                @enderror


                            <input type="password" class="form-control form-control-xl mt-3" name="password" placeholder="Password">
                                 @error('password')
                                <div class="alert alert-danger mt-3">
                                    <p class="">{{ $message }}</p>
                                </div>
                                @enderror


                            <input type="password" class="form-control form-control-xl mt-3" name="password_confirmation" placeholder="Password Confirmation">
                                 @error('password')
                                <div class="alert alert-danger mt-3">
                                    <p class="">{{ $message }}</p>
                                </div>
                                @enderror

                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>

                        </div>
                        <button class="btn btn-primary btn-block btn-lg mt-5 shadow-lg">Send Confirm Password</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
@endsection

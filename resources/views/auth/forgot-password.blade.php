@extends('layouts.auth', ['title' => 'Forgot Password Admin'])

@section('content')
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/"><img src="{{ asset('images/logo/favicon.svg') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Forgot Password</h1>

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p>
                    <form action="{{ route('password.email') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" name="email" placeholder="Email"
                                value="{{ old('email') }}">

                                 @error('email')
                                <div class="alert alert-danger mt-3">
                                    <p class="">{{ $message }}</p>
                                </div>
                                @enderror

                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>

                            </div>

                        </div>
                        <button class="btn btn-primary btn-block btn-lg mt-5 shadow-lg">Send</button>
                    </form>
                    <div class="fs-4 mt-5 text-center text-lg">
                        <p class='text-gray-600'>Remember your account? <a href="auth-login.html" class="font-bold">Log
                                in</a>.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
@endsection

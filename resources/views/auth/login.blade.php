@extends('layouts.auth', ['title' => 'Login - Admin'])

@section('content')
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/"><img src="{{ asset('images/logo/favicon.svg') }}" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>

                    @if (session('status'))
                        <div class="mt-3 rounded-md bg-green-500 p-3 shadow-sm">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="email" value="{{old('email')}}" class="form-control form-control-xl" placeholder="Email" >
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                            @error('email')
                                <div class="">
                                    <div class="">
                                        <p class="">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" value="{{old('password')}}" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            @error('password')
                                <div class="">
                                    <div class="">
                                        <p class="">{{ $message }}</p>
                                    </div>
                                </div>
                            @enderror
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg mt-5 shadow-lg">Log in</button>
                    </form>
                    <div class="fs-4 mt-5 text-center text-lg">
                        <p class="text-gray-600">Don't have an account? <a href="#" class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="#">Forgot password?</a>.</p>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="row mt-5 mb-5">
                <div class="col-md-12 text-center">
                    <img src="../images/logo.jpg" class="img-responsive" alt="" width="150" height="50">
                </div>
            </div>

            @if (session('error_message'))
                <div class="alert alert-danger font-weight-bold">{{ session('error_message') }}</div>
            @elseif (session('warning_message'))
                <div class="alert alert-warning font-weight-bold">{{ session('warning_message') }}</div>
            @elseif (session('info_message'))
                <div class="alert alert-info font-weight-bold">{{ session('info_message') }}</div>
            @elseif (session('success_message'))
                <div class="alert alert-success font-weight-bold">{{ session('success_message') }}</div>
            @endif

            <div class="card rounded-0 shadow-sm border-0">
                <div class="card-header text-uppercase font-weight-bold pt-4 pb-4 text-center" style="background-color: #ffce00;">{{ __('Login to dashboard') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-8 offset-md-2">
                                <label for="email" class="col-form-label text-md-right font-weight-bold">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="pt-3 pb-3 rounded-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-8 offset-md-2">
                                <label for="password" class="col-form-label text-md-right font-weight-bold">{{ __('Password') }}</label>

                                <input id="password" type="password" class="pt-3 pb-3 rounded-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn font-weight-bold pt-2 pb-2 pr-5 pl-5" style="background-color: #ffce00;">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link text-muted" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-md-8 offset-md-2">
                                Don't have an account yet?
                                <a class="text-muted" href="{{ url('/applicant-register') }}">
                                    Register
                                </a>
                                or
                                <a class="text-muted" href="{{ url('/') }}">
                                    Go back to website
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.appLogin')

@section('content')
    <div class="hold-transition">
        <div class="login-box">
            <div class="card card-outline card-primary">
                <div class="card-header text-center">
                    <a href="#" class="h3"><b>{{ __('Reset Password') }}</b></a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="input-group mb-3">
                            <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                         </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="password" type="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Reset Password') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

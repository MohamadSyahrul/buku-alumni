@extends('layouts.master2')
@section('title')
Login
@endsection
@section('content')
<div class="auth-wrapper auth-v1 px-2">
    <div class="auth-inner py-2">
        <!-- Login v1 -->
        <div class="card mb-0">
            <div class="card-body">
                <a href="javascript:void(0);" class="brand-logo">
                    <h2 class="brand-text text-primary ml-1">Buku Alumni</h2>
                </a>

                <h4 class="card-title mb-1">Selamat Datang 👋</h4>
                <p class="card-text mb-2">Silakan masuk ke akun Anda</p>

                <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="login-email" class="form-label">Email</label>
                        <input class="form-control" id="login-email" type="email" name="email"
                            placeholder="Masukan Email Anda" required autofocus />
                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-between">
                            <label for="login-password">Password</label>
                            <a href="page-auth-forgot-password-v1.html">
                                <small>Forgot Password?</small>
                            </a>
                        </div>
                        <div class="input-group input-group-merge form-password-toggle">
                            <input type="password" class="form-control form-control-merge" id="login-password"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="login-password" />
                            <div class="input-group-append">
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" />
                            <label class="custom-control-label" for="remember-me"> Remember Me </label>
                        </div>
                    </div> --}}
                    <button type="submit" class="btn btn-primary btn-block" tabindex="4">Sign in</button>
                </form>
            </div>
        </div>
        <!-- /Login v1 -->
    </div>
</div>
@endsection

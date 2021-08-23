@extends('layouts.master2')
@section('title')
Login
@endsection



@section('content')
<div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
    <h2 class="card-title font-weight-bold mb-1">Welcome to Vuexy! 👋</h2>
    <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>
    
    <form class="auth-login-form mt-2" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="login-email" class="form-label">NIM</label>
            <input class="form-control" id="login-email" type="text" name="nim"
                placeholder="Masukan NIM Anda" required autofocus />
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
                <input class="custom-control-input" id="remember-me" type="checkbox" tabindex="3" />
                <label class="custom-control-label" for="remember-me"> Remember Me</label>
            </div>
        </div> --}}
        <button type="submit" class="btn btn-primary btn-block" tabindex="4">Sign in</button>
    </form>
   
</div>
@endsection

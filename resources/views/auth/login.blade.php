@extends('layouts.app', ['class' => 'login-page', 'page' => _('Login Page'), 'contentClass' => 'login-page'])

@section('content')
    <div class="col-md-10 text-center ml-auto mr-auto">
        <h3 class="mb-5">Laravel Admin Panel</h3>
    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <h1 class="card-title">{{ _('Log in') }}</h1>
                </div>
                <div class="card-body">
                    <p class="text-dark mb-2">Sign in with <strong>naila@gmail.com</strong> and the password <strong>naila123</strong></p>
                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ _('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ _('Password') }}" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-success btn-lg btn-block mb-3">{{ _('Get Started') }}</button>
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}" class="link footer-link">{{ _('Create Account') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" class="link footer-link">{{ _('Forgot password?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

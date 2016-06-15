@extends('layouts.app')
@section('title')
    InfyOm Generator
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {!! session('status') !!]
        </div>
    @endif

    <form class="form-signin" method="post" action="{!! url('/password/reset') !!]">
        {!! csrf_field() !!}

        <h2 class="form-signin-heading">Reset your password</h2>
        <div class="login-wrap">
            <input type="hidden" name="token" value="{!! $token !!]">

            <div class="form-group has-feedback {!! $errors->has('email') ? ' has-error' : '' !!]">
                <input type="email" class="form-control" name="email" value="{!! old('email') !!]" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{!! $errors->first('email') !!]</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{!! $errors->has('password') ? ' has-error' : '' !!]">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{!! $errors->first('password') !!]</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{!! $errors->has('password_confirmation') ? ' has-error' : '' !!]">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{!! $errors->first('password_confirmation') !!]</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right">
                        <i class="fa fa-btn fa-refresh"></i>Reset Password
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection


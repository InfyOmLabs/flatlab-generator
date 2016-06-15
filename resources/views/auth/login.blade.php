@extends('layouts.app')
@section('title')
        InfyOm Generator
@endsection
@section('content')
    <form class="form-signin" method="post" action="{!! url('/login') !!}">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">InfyOm Generator</h2>
        <div class="login-wrap">
            <div class="form-group has-feedback {!! $errors->has('email') ? ' has-error' : '' !!}">
                <input type="email" class="form-control" name="email" value="{!! old('email') !!}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{!! $errors->first('email') !!}</strong>
                </span>
                @endif
            </div>

            <div class="form-group has-feedback{!! $errors->has('password') ? ' has-error' : '' !!}">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{!! $errors->first('password') !!}</strong>
                </span>
                @endif
            </div>

            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a href="{!! url('/password/reset') !!}">forgot password?</a>
                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>

            <div class="registration">
                Don't have an account yet?
                <a class="" href="{!!url('/register')!!}">
                    Create an account
                </a>
            </div>

        </div>
    </form>

@endsection



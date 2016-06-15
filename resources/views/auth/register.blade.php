@extends('layouts.app')
@section('title')
    InfyOm Generator - Registration Page
@endsection
@section('content')
    <form method="post" class="form-signin" action="{!! url('/register') !!}">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">InfyOm Generator</h2>
        <div class="login-wrap">

            <div class="form-group has-feedback{!! $errors->has('name') ? ' has-error' : '' !!}">
                <input type="text" class="form-control" name="name" value="{!! old('name') !!}" placeholder="Full Name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{!! $errors->first('name') !!}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{!! $errors->has('email') ? ' has-error' : '' !!}">
                <input type="email" class="form-control" name="email" value="{!! old('email') !!}" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{!! $errors->first('email') !!}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{!! $errors->has('password') ? ' has-error' : '' !!}">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{!! $errors->first('password') !!}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group has-feedback{!! $errors->has('password_confirmation') ? ' has-error' : '' !!}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{!! $errors->first('password_confirmation') !!}</strong>
                    </span>
                @endif
            </div>

            <label class="checkbox">
                <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>

            <button class="btn btn-lg btn-login btn-block" type="submit">Register</button>

            <div class="registration">
                <a href="{!! url('/login') !!}" class="text-center">I already have a membership</a>
            </div>

        </div>

    </form>

@endsection
@section('javascript')
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
@endsection



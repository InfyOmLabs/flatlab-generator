@extends('layouts.app')
@section('title')
    InfyOm Generator
@endsection
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {!! session('status') !!}
        </div>
    @endif

    <form class="form-signin" method="post" action="{!! url('/password/email') !!}">
        {!! csrf_field() !!}
        <h2 class="form-signin-heading">Forgot Password ?</h2>
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

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                    </button>
                </div>
            </div>
        </div>

    </form>

@endsection


@extends('layouts.auth')

@section('content')

<div class="login-page">
        <div class="branding-part text-center">
            {{--<img src="{{asset('src/admin/img/w-logo.png')}}" alt="">--}}
            <img src="{{asset('src/admin/img/new-logo.png')}}" alt="" style="max-width: 337px">
        </div>
        <div class="login-wrapper">
            <div class="login-form">
                    <form class="form-horizontal" method="POST" action="{{ route('login.submit') }}">
                            {{ csrf_field() }}
                        <div class="content-box">
                            <div class="card-title"><h1>Log in</h1></div>
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">User Name</label>
                                {{-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email address"> --}}
                                <input id="email" type="email" class="form-control" aria-describedby="emailHelp" name="email" value="{{ old('email') }}" placeholder="" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Password</label>
                                {{-- <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"> --}}
                                <input id="password" type="password" class="form-control" name="password" placeholder="" autocomplete="off" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-default login ">LOGIN</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.login')

@section('content')
                {!! Form::open(['url' => ['login'], 'method' => 'POST', 'class' => 'form']) !!}  
                    {!! csrf_field() !!}
                    <div class="header header-primary text-center">
                        <h4>Sign In User</h4>
                    </div>
                    <p class="text-divider"></p>
                    <div class="nav-align-center">
                    <ul class="nav nav-pills nav-pills-primary" role="tablist">
                        <li class="">
                            <a href="{{url('admin/login')}}">
                                <i class="material-icons">account_box</i>
                                Admin
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{url('login')}}">
                                <i class="material-icons">account_box</i>
                                User
                            </a>
                        </li>
                    </ul>
                    </div>
                    <div class="content">
                        <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <span class="input-group-addon">
                                <i class="material-icons">email</i>
                            </span>
                            {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'email@email.com']) }}

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock_outline</i>
                            </span>
                            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif                           
                        </div>
                    </div>
                    <div class="footer text-center">
                        {{ Form::submit('Login User', ['class' => 'btn btn-simple btn-primary btn-lg']) }}
                        <input type="hidden" name="_token" value="{{ Session::token() }}"/>
                        <a class="btn btn-link" href="{{ url('admin/password/reset') }}">Forgot Your Password?</a>
                    </div>
                {!! Form::close() !!}            
@endsection

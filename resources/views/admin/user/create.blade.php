@extends('layouts.dashboard')

@section('activeu', 'active')

@section('head', 'Table User')

@section('content')
	<div class="col-md-3"></div>
	<div class="col-md-6">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Tambah User</h4>
        		<p class="category">blablabla</p>
            </div>
        	<div class="panel-body">
        		{!! Form::open(['url' => ['admin/user'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                
                    {{ csrf_field() }}
					
					<div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}">
						{{ Form::label('ID', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::text('id', old('id'), ['class' => 'form-control']) }}
                            

                            @if ($errors->has('id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    	{{ Form::label('Nama', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::text('name', old('name'), ['class' => 'form-control']) }}
                            

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    	{{ Form::label('E-Mail', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'email@email.com']) }}
                            

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('Jabatan', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                            <select class="form-control" name="jabatanid">
                                @foreach ($jabatans as $jabatan)
                                    <option value="{{$jabatan->id}}">{{$jabatan->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    	{{ Form::label('Password', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) }}
                            

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    	{{ Form::label('Confirm Password', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                            

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit('Tambah User', ['class' => 'btn btn-success']) }}
                            
                        	<a class="btn btn-danger" href="{{url('admin/user')}}" role="button">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
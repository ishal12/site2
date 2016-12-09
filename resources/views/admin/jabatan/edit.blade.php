@extends('layouts.dashboard')

@section('activej', 'active')

@section('head', 'Jabatan')

@section('content')
	<div class="col-md-3"></div>
	<div class="col-md-6">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Edit Jabatan</h4>
        		<p class="category">blablabla</p>
            </div>
        	<div class="panel-body">
        		{!! Form::model($jabatan, ['url' => ['admin/jabatan', $jabatan->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                
                    {{ csrf_field() }}
										
                    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                    	{{ Form::label('Nama', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::text('nama', null, ['class' => 'form-control']) }}
                            

                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit('Edit Jabatan', ['class' => 'btn btn-success']) }}
                            
                        	<a class="btn btn-danger" href="{{url('admin/jabatan')}}" role="button">Batal</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
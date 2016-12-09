@extends('layouts.dashboard')

@section('activek', 'active')

@section('head', 'Category')

@section('content')
	<div class="col-md-3"></div>
	<div class="col-md-6">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Tambah Kategori</h4>
        		<p class="category">blablabla</p>
            </div>
        	<div class="panel-body">
        		{!! Form::open(['url' => ['admin/kategori'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                
                    {{ csrf_field() }}
										
                    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                    	{{ Form::label('Nama', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::text('nama', old('nama'), ['class' => 'form-control']) }}
                            

                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit('Tambah Kategori', ['class' => 'btn btn-success']) }}
                            
                        	<a class="btn btn-danger" href="{{url('admin/kategori')}}" role="button">Batal</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
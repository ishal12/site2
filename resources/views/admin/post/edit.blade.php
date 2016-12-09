@extends('layouts.dashboard')

@section('activep', 'active')

@section('head', 'Post')

@section('content')
	<div class="col-md-3"></div>
	<div class="col-md-6">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Edit Post</h4>
        		<p class="category">blablabla</p>
            </div>
        	<div class="panel-body">
        		{!! Form::model($post, ['url' => ['admin/post', $post->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
                
                    {{ csrf_field() }}

                    <div class="form-group">
                        {{ Form::label('Judul', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                            {{ Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Judul...']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('Kategori', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">

                                {{ Form::select('kategoriid', $kategoris, null, ['class' => 'form-control']) }}

                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('Foto', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                            {{ Form::text('foto', null, ['class' => 'form-control']) }}
                        </div>
                    </div>
										
                    <div class="form-group">
                    	{{ Form::label('Isi', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::textarea('isi', null, ['class' => 'form-control', 'placeholder' => 'Isi...']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit('Edit Post', ['class' => 'btn btn-success']) }}
                            
                        	<a class="btn btn-danger" href="{{url('admin/post')}}" role="button">Batal</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
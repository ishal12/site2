@extends('layouts.dashboard')

@section('activep', 'active')

@section('head', 'Post')

@section('content')
	<div class="col-md-3"></div>
	<div class="col-md-6">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Tambah Post</h4>
        		<p class="category">blablabla</p>
            </div>
        	<div class="panel-body">

        		{!! Form::open(['route' => ['admin.post.store'], 'data-parsley-validate' => '', 'class' => 'form-horizontal', 'files' => true ]) !!}

                    <div class="form-group">
                        {{ Form::label('Judul', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                            {{ Form::text('judul', null, ['class' => 'form-control', 'placeholder' => 'Judul...']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('Kategori', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                            <select class="form-control" name="kategoriid">
                                @foreach ($kategoris as $kategori)
                                    <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('foto','Upload Gambar', ['class' => 'col-md-4 control-label']) }}
                    </div>
                    <div class="col-md-4">
                    </div>
                    {{ Form::file('foto') }}

										
                    <div class="form-group">
                    	{{ Form::label('Isi', null, ['class' => 'col-md-4 control-label']) }}
                        

                        <div class="col-md-6">
                        	{{ Form::textarea('isi', null, ['class' => 'form-control', 'placeholder' => 'Isi...']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {{ Form::submit('Tambah Post', ['class' => 'btn btn-success']) }}
                            
                        	<a class="btn btn-danger" href="{{url('admin/post')}}" role="button">Batal</a>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
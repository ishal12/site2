@extends('layouts.dashboard')

@section('activek', 'active')

@section('head', 'Category')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header" data-background-color="purple">
                <div class="row">
                    <div class="col-lg-9">
                        <h4 class="title">All Category</h4>
                        <p class="category">blablabla</p>
                    </div>
                    <div class="col-lg-3">
                        <a class="btn btn-success btn-lg" href="{{url('admin/kategori/create')}}" role="button">Tambah Kategori</a>
                    </div>
                </div>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>nama</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                    </thead>
                    <tbody>
                        @foreach($kategoris as $kategori)
                            <tr>
                                <td>{{ $kategori->id }}</td>
                                <td>{{ $kategori->nama }}</td>
                                <td>{{ date('M j, Y h:ia', strtotime($kategori->created_at)) }}</td>
                                <td>{{ date('M j, Y h:ia', strtotime($kategori->updated_at)) }}</td>
                                <td><center><a class="btn btn-info btn-lg" href="{{route('admin.kategori.edit', $kategori->id)}}" role="button"><i class="material-icons">create</i></i></a></center></td>
                                {!! Form::open(['url' => ['admin/kategori', $kategori->id], 'method' => 'DELETE']) !!}
                                    <td>
                                        <center>
                                    {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-lg', 'role' => 'button', 'type' => 'submit']) !!}
                                        </center>
                                    </td>
                                {!! Form::close() !!}
                            </tr>
                        @endforeach         
                    </tbody>
                </table>
                <div class="text-center tim-row" id="pagination-row">
                    <ul class="pagination pagination-primary">
                        {!! $kategoris->links() !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
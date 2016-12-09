@extends('layouts.dashboard')

@section('activej', 'active')

@section('head', 'Jabatan')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header" data-background-color="purple">
                <div class="row">
                    <div class="col-lg-10">
                        <h4 class="title">All Jabatan</h4>
                        <p class="category">blablabla</p>
                    </div>
                    <div class="col-lg-2">
                        <a class="btn btn-success btn-lg" href="{{url('admin/jabatan/create')}}" role="button">Tambah Jabatan</a>
                    </div>
                </div>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>nama</th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                    </thead>
                    <tbody>
                        @foreach($jabatans as $jabatan)
                            <tr>
                                <td>{{ $jabatan->id }}</td>
                                <td>{{ $jabatan->nama }}</td>
                                <td><center><a class="btn btn-info btn-lg" href="{{route('admin.jabatan.edit', $jabatan->id)}}" role="button"><i class="material-icons">create</i></i></a></center></td>
                                {!! Form::open(['url' => ['admin/jabatan', $jabatan->id], 'method' => 'DELETE']) !!}
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
                        {!! $jabatans->links() !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
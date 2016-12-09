@extends('layouts.dashboard')

@section('activep', 'active')

@section('head', 'Post')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header" data-background-color="purple">
                <div class="row">
                    <div class="col-lg-9">
                        <h4 class="title">All Post</h4>
                        <p class="category">blablabla</p>
                    </div>
                    <div class="col-lg-3">
                        <a class="btn btn-success btn-lg" href="{{url('admin/post/create')}}" role="button">Tambah Post</a>
                    </div>
                </div>
            </div>
            <div class="card-content table-responsive">
                <table class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Foto</th>
                        <th>Created At</th>
                        <th>Update At</th>
                        <th><center>view</center></th>
                        <th><center>Edit</center></th>
                        <th><center>Delete</center></th>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->judul }}</td>
                                <td>{{substr( $post->isi, 0, 50 )}}{{strlen( $post->isi ) > 50 ? '...' : ''}}</td>
                                <td>{{ $post->foto }}</td>
                                <td>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</td>
                                <td>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</td>
                                <td><center><a class="btn btn-info btn-lg" href="{{route('admin.post.show', $post->id)}}" role="button"><i class="material-icons">pageview</i></i></a></center></td>
                                <td><center><a class="btn btn-info btn-lg" href="{{route('admin.post.edit', $post->id)}}" role="button"><i class="material-icons">create</i></i></a></center></td>
                                    {!! Form::open(['url' => ['admin/post', $post->id], 'method' => 'DELETE']) !!}
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
                        {!! $posts->links() !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
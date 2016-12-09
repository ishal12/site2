@extends('layouts.main')

@section('title', '| Contact Us')

@section('class', 'profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('news')
                    <div class="row">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{URL::asset('img/christian.jpg')}}" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="name">
                                <h3 class="title">Contact Us</h3>
                                <h6>UBAYA</h6>
                            </div>
                        </div>
                    </div>
                    <div class="description text-center">
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                    </div>

@endsection




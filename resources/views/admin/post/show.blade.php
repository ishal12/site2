@extends('layouts.main')

@section('class', 'index')

@section('judul')
                    <div class="col-md-8 col-md-offset-2">
                        <div class="brand">
                            <h1>UBAYA</h1>
                            <h3>UNIVERSITAS SURABAYA.</h3>
                        </div>
                    </div>
@endsection

@section('news')
                    <div class="row">
                        <div class="col-md-6">
                            <h1>{{$post->judul}}
                                @if(Auth::guard('admin')->user())
                                    <a class="btn btn-danger" href="{{url('admin/post')}}" role="button">Kembali</a>
                                @endif
                            </h1>
                            <h4>{{$post->isi}}</h4>
                            <p>Created at: {{date('M j, Y h:ia', strtotime($post->created_at))}}</p>
                        </div>
                    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $().ready(function(){
            // the body of this function is in assets/material-kit.js
            materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

                $(window).on('scroll', materialKitDemo.checkScrollForParallax);
            }

        });
        $('.carousel').carousel({
          interval: 1000 * 10
        });
    </script>
@endsection

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>UBAYA @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/material-kit.css')}}" rel="stylesheet"/>
</head>

<body class="signup-page">
	@include('partials._nav')

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('{{URL::asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							@yield('content')
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
		        <div class="container">
		            <nav class="pull-left">
						<ul>
	                        <li>
	                            <a href="#">
	                                About Us
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Contact Us
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               Blog
	                            </a>
	                        </li>
	                    </ul>
		            </nav>
		            <div class="copyright pull-right">
		                &copy; 2016 | Web Framework Programing - UBAYA by Ishal, Rama & Lucas.
		            </div>
		        </div>
		    </footer>

		</div>

    </div>


</body>
	@include('partials._script')

</html>

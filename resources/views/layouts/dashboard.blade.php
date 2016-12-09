
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/apple-icon.png')}}" />
	<link rel="icon" type="image/png" href="{{URL::asset('img/favicon.png')}}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>UBAYA | Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{URL::asset('css/material-dashboard.css')}}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    @yield('boots')
    <style type="text/css">
    	.pagination > li > a,
		.pagination > li > span {
		  border: 0;
		  border-radius: 30px !important;
		  transition: all .3s;
		  padding: 0px 11px;
		  margin: 0 3px;
		  min-width: 30px;
		  height: 30px;
		  line-height: 30px;
		  color: #999999;
		  font-weight: 400;
		  font-size: 12px;
		  text-transform: uppercase;
		  background: transparent;
		}
		.pagination > li > a:hover, .pagination > li > a:focus,
		.pagination > li > span:hover,
		.pagination > li > span:focus {
		  color: #999999;
		}
		.pagination > .active > a,
		.pagination > .active > span {
		  color: #999999;
		}
		.pagination > .active > a, .pagination > .active > a:focus, .pagination > .active > a:hover,
		.pagination > .active > span,
		.pagination > .active > span:focus,
		.pagination > .active > span:hover {
		  background-color: #9c27b0;
		  border-color: #9c27b0;
		  color: #FFFFFF;
		  box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);
		}
		.pagination.pagination-info > .active > a, .pagination.pagination-info > .active > a:focus, .pagination.pagination-info > .active > a:hover,
		.pagination.pagination-info > .active > span,
		.pagination.pagination-info > .active > span:focus,
		.pagination.pagination-info > .active > span:hover {
		  background-color: #03a9f4;
		  border-color: #03a9f4;
		  box-shadow: 0 4px 5px 0 rgba(3, 169, 244, 0.14), 0 1px 10px 0 rgba(3, 169, 244, 0.12), 0 2px 4px -1px rgba(3, 169, 244, 0.2);
		}
		.pagination.pagination-success > .active > a, .pagination.pagination-success > .active > a:focus, .pagination.pagination-success > .active > a:hover,
		.pagination.pagination-success > .active > span,
		.pagination.pagination-success > .active > span:focus,
		.pagination.pagination-success > .active > span:hover {
		  background-color: #4caf50;
		  border-color: #4caf50;
		  box-shadow: 0 4px 5px 0 rgba(76, 175, 80, 0.14), 0 1px 10px 0 rgba(76, 175, 80, 0.12), 0 2px 4px -1px rgba(76, 175, 80, 0.2);
		}
		.pagination.pagination-warning > .active > a, .pagination.pagination-warning > .active > a:focus, .pagination.pagination-warning > .active > a:hover,
		.pagination.pagination-warning > .active > span,
		.pagination.pagination-warning > .active > span:focus,
		.pagination.pagination-warning > .active > span:hover {
		  background-color: #fbc02d;
		  border-color: #fbc02d;
		  box-shadow: 0 4px 5px 0 rgba(251, 192, 45, 0.14), 0 1px 10px 0 rgba(251, 192, 45, 0.12), 0 2px 4px -1px rgba(251, 192, 45, 0.2);
		}
		.pagination.pagination-danger > .active > a, .pagination.pagination-danger > .active > a:focus, .pagination.pagination-danger > .active > a:hover,
		.pagination.pagination-danger > .active > span,
		.pagination.pagination-danger > .active > span:focus,
		.pagination.pagination-danger > .active > span:hover {
		  background-color: #f44336;
		  border-color: #f44336;
		  box-shadow: 0 4px 5px 0 rgba(244, 67, 54, 0.14), 0 1px 10px 0 rgba(244, 67, 54, 0.12), 0 2px 4px -1px rgba(244, 67, 54, 0.2);
		}
    </style>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="purple" data-image="{{URL::asset('img/sidebar-1.jpg')}}">

			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<center>
					<a  href="{{ url('/') }}"><img src="{{URL::asset('img/brand1.png')}}" ></img></a>
				</center>
			</div>

	    	<div class="sidebar-wrapper">
	    		<ul class="nav">
	                <li class="@yield('actived')">
	                    <a href="{{url('admin')}}">
	                        <i class="material-icons">dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li class="@yield('activeu')">
	                    <a href="{{url('admin/user')}}">
	                        <i class="material-icons">person</i>
	                        <p>Users</p>
	                    </a>
	                </li>
	                <li class="@yield('activedo')">
	                    <a href="{{url('admin/user')}}">
	                        <i class="material-icons">person</i>
	                        <p>Dosen</p>
	                    </a>
	                </li>
	                <li class="@yield('activej')">
	                    <a href="{{url('admin/jabatan')}}">
	                        <i class="material-icons">person</i>
	                        <p>Jabatan</p>
	                    </a>
	                </li>
	                <li class="@yield('activel')">
	                    <a href="{{url('admin/user')}}">
	                        <i class="material-icons">person</i>
	                        <p>Laboratorium</p>
	                    </a>
	                </li>
	                <li class="@yield('activem')">
	                    <a href="{{url('admin/user')}}">
	                        <i class="material-icons">person</i>
	                        <p>Matakuliah</p>
	                    </a>
	                </li>
	                <li class="@yield('activep')">
	                    <a href="{{url('admin/post')}}">
	                        <i class="material-icons">library_books</i>
	                        <p>Posts</p>
	                    </a>
	                </li>
	                <li class="@yield('activek')">
	                    <a href="{{url('admin/kategori')}}">
	                        <i class="material-icons">label</i>
	                        <p>Categories</p>
	                    </a>
	                </li>
	            </ul>
	    	</div>
		</div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">@yield('head')</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="material-icons">notifications</i>
										<span class="notification">5</span>
										<p class="hidden-lg hidden-md">Notifications</p>
								  </a>
								  <ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								  </ul>
							</li>
							@if(Auth::guard('admin')->user())
	                        <li class="dropdown">
	                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                                <i class="material-icons">person</i> {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
	                            </a>
	                            <ul class="dropdown-menu">
	                            	<li><a href="{{ url('/admin') }}"><i class="material-icons">dashboard</i> Dashboard</a></li>
	                            	<li class="divider"></li>
	                                <li><a href="{{ url('/admin/logout') }}"><i class="material-icons">exit_to_app</i> Logout</a></li>
	                            </ul>
	                        </li>
		                    @endif
						</ul>

					</div>
				</div>
			</nav>

	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                	@include('partials._message')
						@yield('content')
	                </div>
	            </div>
	        </div>
			<footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="{{url('/')}}">
	                                Home
	                            </a>
	                        </li>

	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
	                </p>
	            </div>
	        </footer>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{URL::asset('js/jquery-3.1.0.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{URL::asset('js/material.min.js')}}" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="{{URL::asset('js/chartist.min.js')}}"></script>

	<!--  Notifications Plugin    -->
	<script src="{{URL::asset('js/bootstrap-notify.js')}}"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="{{URL::asset('js/material-dashboard.js')}}"></script>

	@yield('script')
</html>

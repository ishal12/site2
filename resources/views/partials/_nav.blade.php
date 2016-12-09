	<!-- Navbar -->
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
		<div class="container">
	        <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		    	</button>
		    	<a  href="{{ url('/') }}"><img src="{{URL::asset('img/brand1.png')}}" ></img></a>

		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    	<ul class="nav navbar-nav">
                    <li ><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
		    	<ul class="nav navbar-nav navbar-right">
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
	                @elseif(Auth::guard('user')->user())
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                            <i class="material-icons">person</i> {{ Auth::guard('user')->user()->name }} <span class="caret"></span>
	                        </a>
	                        <ul class="dropdown-menu">
	                            <li><a href="{{ url('/logout') }}"><i class="material-icons">exit_to_app</i> Logout</a></li>
	                        </ul>
	                    </li>
	                @else
	                	<li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	                            <i class="material-icons">person</i> Login <span class="caret"></span>
	                        </a>
	                        <ul class="dropdown-menu">
	                        	<li><a href="{{ url('/login') }}"><i class="material-icons">input</i> Login User</a></li>
	                    		<li><a href="{{ url('/admin/login') }}"><i class="material-icons">input</i> Login Admin</a></li>
	                        </ul>
	                    </li>
	                @endif
		    	</ul>
		    </div>
		</div>
	</nav>
	<!-- End Navbar -->
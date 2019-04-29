<style>
	.login{
		display: inline-block;
		padding: 2% 0px;
	}
	.links > .login > a,
	.links > .register > a{
		color: #fff;
		padding: 0 25px;
		font-size: 12px;
		font-weight: 600;
		letter-spacing: .1rem;
		text-decoration: none;
		text-transform: uppercase;
	}
</style>
<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">

			<!-- Collapsed Hamburger -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<!-- Branding Image -->
			<div class="panel-body">

            </div>
		</div>

		<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<!-- Authentication Links -->
				@guest
					<img  src="{{ asset('/images/logo.png') }}" height="5%" width="10%" style="margin-left: -10%; margin-top: -3%">
					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
						<div class="login btn btn-primary" style="display: inline-block;padding: 2% 0px;">
							<a href="{{ route('login') }}" style="color: #fff;padding: 0 25px;font-size: 12px;font-weight: 600;letter-spacing: .1rem;text-decoration: none;text-transform: uppercase;">Login</a>
						</div>
						<div class="register btn btn-primary" style="display: inline-block;padding: 2% 0px;" >
							<a  href="{{ route('register') }}" style="color: #fff;padding: 0 25px;font-size: 12px;font-weight: 600;letter-spacing: .1rem;text-decoration: none;text-transform: uppercase;" >Register</a>
						</div></a></li>
					</ul>
				@else
					<img  src="{{ asset('/images/logo.png') }}" height="5%" width="10%" style=" margin-left: -35%; margin-top: -3%">
					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ route('home') }}">Dashboard</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
								{{ Auth::user()->name }} <span class="caret"></span>
							</a>

							<ul class="dropdown-menu">
								<li>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();">
										Logout
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										{{ csrf_field() }}
									</form>
								</li>
							</ul>
						</li>
					</ul>
					<!-- Left Side Of Navbar -->
					<ul class="nav navbar-nav">
						<li><a href="{{ route('departments.index') }}">Departments</a></li>
						<li><a href="{{ route('roles.index') }}">Roles</a></li>
						<li><a href="{{ route('employees.index') }}">Employees</a></li>
					</ul>
				@endguest
		</div>
	</div>
</nav>
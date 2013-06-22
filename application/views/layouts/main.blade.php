<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{{$title}} - Recurring Payments Demo</title>
	{{Asset::container('header')->styles()}}
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">

		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					{{HTML::link('/', 'Recurring Payments', array('class' => 'brand'))}}
					<ul class="nav">
					@if(Auth::check())
						<li>{{HTML::link('dashboard', 'Dashboard')}}</li>
					@else
						<li>{{HTML::link('register', 'Register')}}</li>
					@endif
					</ul>
					@if(Auth::check())
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li>{{HTML::link('settings', 'Settings')}}</li>
									<li class="divider"></li>
									<li>{{HTML::link('logout', 'Logout')}}</li>
								</ul>
							</li>
						</ul>
					@else
						{{Form::open('login')}}
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
								<ul class="dropdown-menu login-box">
									<li>{{Form::email('username', null, array('placeholder' => 'Email Address'))}}</li>
									<li>{{Form::password('password', array('placeholder' => 'password'))}}</li>
									<li>{{Form::submit('Login', array('class' => 'btn btn-primary'))}}</li>
								</ul>
							</li>
						</ul>
						{{Form::close()}}
					@endif
				</div>
			</div>
		</div>

		{{$content}}

	</div>

	{{Asset::container('footer')->scripts()}}
</body>
</html>
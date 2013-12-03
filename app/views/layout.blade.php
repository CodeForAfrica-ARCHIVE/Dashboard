<html>
	<head>
		 <title>{{ $title }} | Dashboard</title>
		 <link href="{{ asset('assets/css/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css" />
		 <link href="{{ asset('assets/css/bootstrap-theme.css') }}" media="all" rel="stylesheet" type="text/css" />
	</head>	
    <body>
    	
    	<div class="container">
    		
			<ul class="nav navbar-nav navbar-right">
			  <li class="active"><a href="{{{ URL::to('projects') }}}">Home</a></li>
			  <li><a href="{{{ URL::to('users') }}}">Users</a></li>
			  <li><a href="{{{ URL::to('projects/add-project') }}}">Add Project</a></li>
			</ul>
    			
			<h1>Dashboard</h1>
		    @yield('content')
			
			<script src="{{ asset('assets/css/bootstrap.js') }}"></script>
    	</div>
    </body>
</html>
<html>
	<head>
		 <title>{{ $title }} | Dashboard</title>
		 <link href="{{ asset('assets/css/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css" />
		 <link href="{{ asset('assets/css/bootstrap-theme.css') }}" media="all" rel="stylesheet" type="text/css" />
	</head>	
    <body>
    	
    	<div class="container">
    		<div class="">
    		</div>
        <h1>Dashboard</h1>

        @yield('content')
    	
    	<script src="{{ asset('assets/css/bootstrap.js') }}"></script>
    	</div>
    </body>
</html>
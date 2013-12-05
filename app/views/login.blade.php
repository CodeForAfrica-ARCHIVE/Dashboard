<title>Login | Dashboard</title>
<link href="{{ asset('assets/css/bootstrap.css') }}" media="all" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/bootstrap-theme.css') }}" media="all" rel="stylesheet" type="text/css" />

<div style="text-align: center;height:100%;padding-top:40px;">

 	<img src="{{ URL::to('assets/img/logo.png')}}" width="100px" style="vertical-align:middle; ">
 	<h1 style="margin-bottom: 20px;">Dashboard</h1>
	<a class='login' href='{{ $authUrl }}'><img src="{{ URL::to('assets/img/google.png')}}" width="250px"></a>

</div>
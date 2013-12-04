@extends('layout')

@section('content')

<h3>{{ $project->p_title }}</h3>
<img src="{{ URL::to('uploads/'.$project->p_logo)}}" height="250px"/>
<p>
	{{ $project->p_description}}
</p>
@stop
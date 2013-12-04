@extends('layout')

@section('content')

<h3>{{ $project->p_title }}</h3>
<img src="{{ URL::to('uploads/'.$project->p_logo)}}" height="250px"/>
<br />
<a href="{{ URL::to('projects/delete-project?id='.$project->p_id)}}" onclick='confirm("Are you sure you want to delete this")'>Delete</a> | Edit
<p>
	{{ $project->p_description}}
</p>
@stop
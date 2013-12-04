@extends('layout')

@section('content')

<h3>{{ $project->p_title }}</h3>
<img src="{{ URL::to('uploads/'.$project->p_logo)}}" height="250px"/>
<br />
<a href="{{ $project->p_link }}" target="_blank">{{ $project->p_link }}</a>
<br />
<a href="{{ URL::to('projects/delete-project?id='.$project->p_id)}}" onclick='confirm("Are you sure you want to delete this")'>Delete</a> 
|
 <a href="{{ URL::to('projects/edit-project?id='.$project->p_id) }}">Edit</a>
<p>
	{{ $project->p_description}}
</p>
@stop
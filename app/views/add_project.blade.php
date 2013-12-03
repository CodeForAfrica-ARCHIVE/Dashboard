@extends('layout')

@section('content')
<h4>Add Project</h4>
{{ Form::open(array('url' => 'projects/process-add')) }}
	{{ Form::text('title', null, array('placeholder'=>'Title')) }}
	<br />
	{{ Form::textarea('description', null, array('placeholder'=>'Description' )) }}
    <br />
    {{Form::submit('Add Project')}}
{{ Form::close() }}

@stop
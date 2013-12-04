@extends('layout')

@section('content')

@if($error===1)
	{{ "Encountered errors:" }}<ul>
	@foreach($message->all() as $message)
		<li>{{ $message }}</li>
	@endforeach
	</ul>
@else
	{{ $message }}
@endif

<div class='row'>
	<div class="col-md-9">
		<h4>Edit {{  $project->p_title }}</h4>
		{{ Form::open(array('url' => URL::to('projects').'/process-edit', 'files'=>'true')) }}
			{{ Form::hidden('id', $project->p_id) }}
			{{ Form::text('title', $project->p_title, array('placeholder'=>'Title', 'type'=>'text', 'class'=>'form-control')) }}
			<br />
			{{ Form::text('link', $project->p_link, array('placeholder'=>'Link', 'type'=>'text', 'class'=>'form-control')) }}
			<br />
			<img src="{{ URL::to('uploads/'.$project->p_logo)}}" height="100px"/>
			<br />
			{{ Form::hidden('old_logo', $project->p_logo) }}
			{{ Form::label('logo', 'Logo').Form::file('logo') }}
			<br />
			{{ Form::textarea('description', $project->p_description, array('placeholder'=>'Description', 'class'=>'form-control' )) }}
		    <br />
		    {{Form::submit('Edit Project', array('class'=>'btn btn-primary'))}}
		{{ Form::close() }}
	</div>
</div>
@stop
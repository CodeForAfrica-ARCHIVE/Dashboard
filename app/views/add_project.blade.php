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
		<h4>Add Project</h4>
		{{ Form::open(array('url' => URL::to('projects').'/process-add', 'files'=>'true')) }}
			{{ Form::text('title', null, array('placeholder'=>'Title', 'type'=>'text', 'class'=>'form-control')) }}
			<br />
			{{ Form::text('link', null, array('placeholder'=>'Link', 'type'=>'text', 'class'=>'form-control')) }}
			<br />
			{{ Form::label('logo', 'Logo').Form::file('logo') }}
			<br />
			{{ Form::textarea('description', null, array('placeholder'=>'Description', 'class'=>'form-control' )) }}
		    <br />
		    {{Form::submit('Add Project', array('class'=>'btn btn-primary'))}}
		{{ Form::close() }}
	</div>
</div>
@stop
@extends('layout')

@section('content')

<h3>{{ "Projects" }}</h3>

  @if(count($projects)===0)
  	{{ "No projects added!" }}
  @endif
  <div class="row">
   @foreach($projects as $project)
   		<div class="col-md-3">
   			
	   		<a href="{{ URL::to('projects/view-project?id='.$project->p_id)}}">
	   			<img src="{{URL::to('uploads').'/'.$project->p_logo}}" width="100%" height="150px">
	   		</a>
	        <strong><a href="{{ URL::to('projects/view-project?id='.$project->p_id)}}">{{ $project->p_title }}</a></strong>
	        <div style="text-align:justify">
	       		 {{ substr($project->p_description, 0, 200).'...<a href="'.URL::to('projects/view-project?id='.$project->p_id).'">(more)</a>' }}
	       	</div>
        </div>
    @endforeach
    </div>
@stop
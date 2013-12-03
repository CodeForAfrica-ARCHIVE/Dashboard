@extends('layout')

@section('content')
   @foreach($projects as $project)
        <p>{{ $project->p_title }}</p>
    @endforeach
@stop
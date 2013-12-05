@extends('layout')

@section('content')
	<h3>Users</h3>
	<table class="table table-striped">
		
   @foreach($users as $user)
        <tr>
        	<td><img src="{{$user->picture}}" width="70px" style="border:1px solid grey"></td><td><a href="{{$user->link}}" target="_blank">{{$user->name}}</a><br /><a href="mailto:{{$user->email}}">{{ $user->email }}</a></td>
        </tr>
    @endforeach
    </table>
@stop
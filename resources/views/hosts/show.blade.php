@extends('layouts.master')

@section('content')

	<table class="table table-striped table-bordered table-hover">
		
		<thead class="thead-inverse">
		
			<tr>

				@include('hosts.intestazione')
		
			</tr>
		
		</thead>
		
		<tbody>
		
			<tr>

				@include('hosts.host')

				@include('hosts.editbuttons')
		
			</tr>
		
		</tbody>
	
	</table>

@stop
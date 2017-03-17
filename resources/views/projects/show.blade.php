@extends('layouts.master')

@section('content')

	<table class="table table-striped table-bordered table-hover">
		
		<thead class="thead-inverse">
		
			<tr>

				@include('projects.intestazione')
				
			</tr>
		
		</thead>
		
		<tbody>
		
			<tr>

				@include('projects.project')
		
			</tr>
		
		</tbody>
	
	</table>

@stop
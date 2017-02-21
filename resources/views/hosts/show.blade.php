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
		
			</tr>
		
		</tbody>
	
	</table>

@stop
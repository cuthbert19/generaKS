@extends('layouts.master')

@section('content')

	<table class="table table-striped table-bordered table-hover">
		
		<thead class="thead-inverse">
		
			@include('netdevices.intestazione')
		
		</thead>
		
		
		<tbody>
		
			<tr>
				
				@include('netdevices.netdevice')

			</tr>

		</tbody>
	
	</table>

@stop
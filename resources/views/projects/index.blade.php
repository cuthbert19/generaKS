@extends('layouts.master')

@section('content')

	<table class="table table-striped table-bordered table-hover">
		
		<thead class="thead-inverse">
		
			<tr>

				<th>Hostname</th>
		
				<th>Ip assegnato alla VM che effettua il deploy</th>
		
				<th>Subnet della VM</th>
		
				<th>Lista hosts</th>
		
			</tr>
		
		</thead>
		
		<tbody>
		
			@foreach ($projects as $project)
			
			<tr>
				
				@include('projects.project')

			</tr>

			@endforeach
		
		</tbody>
	
	</table>

@stop
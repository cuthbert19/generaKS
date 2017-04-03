@extends('layouts.master')

@section('content')

	<div class="row"></div>

	<h2 class="display-4">Host <strong>{{ $host->name }}</strong></h2>

	<hr>


	{{-- {{dd(\Session::all())}} --}}

	<div class="row">
		
		@include('layouts.flash-message')

		@yield('content')

	</div>

	<table class="table table-striped table-bordered table-hover">
		
		<thead class="thead-inverse">
		
			@include('netdevices.intestazione')
		
		</thead>
		
		
		<tbody>
		
			<tr>
				
				@include('netdevices.netdevice')

				@include('netdevices.editbuttons')

			</tr>

		</tbody>
	
	</table>

@stop
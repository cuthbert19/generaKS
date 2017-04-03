@extends('layouts.master')

@section('content')

	<table class="table table-striped table-bordered table-hover">
		
		<thead class="thead-inverse">
		
			@include('netdevices.intestazione')
		
		</thead>
		
		
		<tbody>
		
			@foreach ($netdevices as $netdevice)
			
			<tr>
				
				@include('netdevices.netdevice')

				@include('netdevices.editbuttons')

			</tr>

			@endforeach
		
		</tbody>
	
	</table>

	{!! $netdevices->render() !!}

@stop
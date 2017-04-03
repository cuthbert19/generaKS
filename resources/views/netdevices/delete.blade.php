@extends('layouts.master')

@section('content')

<div class="row">

	<h1 class="display-4">Eliminazione interfaccia di rete</h1>

</div>

<hr>

<div class="row">

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

</div>

<div class="row">
	
	<form method="post" action="/netdevices/{{$netdevice->id}}"> 
		{{method_field('DELETE')}} 
		{{csrf_field()}} 

		<label><p>Confermi di voler eliminare l'interfaccia?</p></label>
		
		<div class="form-group">

			

			<button class="btn btn-danger" type="submit" value="delete"><i class="fa fa-eraser fa-lg"></i> Elimina</button>

			<button class="btn btn-outline-primary" type="button"><a href="{{ \Session::get('urlBack') }}"><i class="fa fa-times fa-lg"></i> Annulla</a></button>

		</div>

		

	</form>

</div>

@stop
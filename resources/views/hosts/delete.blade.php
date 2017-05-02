@extends('layouts.master')

@section('content')

<div class="row">

	<h1 class="display-4">Eliminazione host</h1>

</div>

<hr>

<div class="row">

	<table class="table table-striped table-bordered table-hover">
		
		<thead class="thead-inverse">

			@include('hosts.intestazione')

		</thead>
		
		
		<tbody>

			<tr>
				
				@include('hosts.host')

			</tr>

		</tbody>

	</table>

</div>

<div class="row">
	
	<form method="post" action="/hosts/{{$host->id}}"> 
		{{method_field('DELETE')}} 
		{{csrf_field()}} 

		<div><label><p>Confermi di voler eliminare l'host?</p></label></div>

		<div><label class="alert-danger"><p><strong>NB: L'operazione comporterà l'eliminazione di TUTTE le interfacce di rete configurate sull'host!</strong></p></label></div>
		
		<div class="form-group">

			

			<button class="btn btn-danger" type="submit" value="delete"><i class="fa fa-eraser fa-lg"></i> Elimina</button>

			<button class="btn btn-outline-primary" type="button"><a href="{{ \Session::get('urlBack') }}"><i class="fa fa-times fa-lg"></i> Annulla</a></button>

		</div>

		

	</form>

</div>

@stop
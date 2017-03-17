@extends('layouts.master')

@section('content')

	<div class="row">

		<h1 class="display-4">Crea un nuovo progetto</h1>

	</div>


	<hr>


	<div class="row">

		<form method="POST" action="/projects">

			{{ csrf_field() }}

			@include('layouts.inputriga', 

				[
					'label_text'	=> 'Nome progetto',
					'label_id'		=> 'Nome',
					'field_name'	=> 'name',
					'input_type'	=> 'text',
					'required'		=>	'1', 

				])

			@include('layouts.inputriga', 

				[
					'label_text'	=> 'IP Interfaccia',
					'label_id'		=> 'ipVM',
					'field_name'	=> 'ipVM',
					'input_type'	=> 'text',
					'required'		=>	'1',

				])


			@include('layouts.inputriga', 

				[
					'label_text'	=> 'Subnet Interfaccia',
					'label_id'		=> 'subnetVM',
					'field_name'	=> 'subnetVM',
					'input_type'	=> 'text',
					'required'		=>	'1',
					'value'			=> '255.255.255.0'

				])


			<div class="form-group">

				<button class="btn btn-primary btn-lg " type="submit">Crea</button>

			</div>


		</form>

	</div>

@stop


			


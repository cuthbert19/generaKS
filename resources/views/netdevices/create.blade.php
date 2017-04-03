@extends('layouts.master')

@section('content')

<div class="row">

	<h1 class="display-4">Aggiunge una nuova interfaccia di rete - <strong>{{ $host->name }}</strong></h1>

</div>


<hr>

<div class="row">
	
	@include('layouts.flash-message')

	@yield('content')

</div>


<div class="row">

	<form method="POST" action="/netdevices">

		{{ csrf_field() }}

		{{-- passo l'host_id come campo nascosto --}}

		<input type="hidden" name="host_id" value={{ $host->id }}>

		<p class="muted small">I campi sono pre-popolati a partire da quelli dell'ultima interfaccia configurata sull'host</p>


		<table class="table table-striped table-bordered table-hover">

			<thead class="thead-inverse">

				@include('netdevices.intestazione',['printhost' => false])

			</thead>


			<tbody>

				{{-- Visualizzazione delle schede di rete già configurate per l'host --}}
				@if ($netdevices -> count() > 0)

				@foreach ($netdevices as $netdevice)

				<tr>

					@include('netdevices.netdevice',['printhost' => false])

					@include('netdevices.editbuttons')

				</tr>

				@endforeach

				@endif


				{{-- form per l'inserimento dei dati della nuova interfaccia, sempre in tabella --}}
				<tr>

					@include('netdevices.form')

				</tr>

			</tbody>

		</table>

		{{-- Bottone per l'aggiunta --}}
		<div class="form-group">

			<button class="btn btn-primary" type="submit"><i class="fa fa-plus-square fa-lg"></i> Aggiungi</button>

			<button class="btn btn-outline-primary" type="button"><a href="{{ \Session::get('urlBack') }}"><i class="fa fa-times fa-lg"></i> Annulla</a></button>

		</div>


		@if ($errors->count() > 0)

		<div class="form-group">
			<div class="form-group">
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>

		@endif

	</form>

</div>


@stop
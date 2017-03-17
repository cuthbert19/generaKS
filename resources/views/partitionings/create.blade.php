@extends('layouts.master')

@section('content')

<div class="row">

	<h1 class="display-4">Aggiunge un nuovo device/mountpoint</h1>

</div>


<hr>


<div class="row">

	<form method="POST" action="/partitionings" >

		{{ csrf_field() }}

			{{-- @if ()
				expr
				@endif --}}
				<p class="muted small">I campi sono pre-popolati a partire da quelli dell'ultimo device/mountpoint configurato</p>


				<table class="table table-striped table-bordered table-hover">

					<thead class="thead-inverse">

						@include('partitionings.intestazione')

					</thead>


					<tbody>

						{{-- Visualizzazione delle schede di rete già configurate per l'host --}}
						@if ($netdevices -> count() > 0)

						@foreach ($netdevices as $netdevice)

						<tr>

							@include('netdevices.netdevice')

						</tr>

						@endforeach
						
						@endif

						{{-- form per l'inserimento dei dati della nuova interfaccia, sempre in tabella --}}
						<tr>

							@include('netdevices.form')

						</tr>

					</tbody>

				</table>


				<div class="form-group">

					<button class="btn btn-primary btn-lg " type="submit">Aggiungi</button>

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
@extends('layouts.master')

@section('content')

	<div class="row">

		<h1 class="display-4">Crea un nuovo host</h1>

	</div>


	<hr>


	<div class="row">

		<form method="POST" action="/hosts">

			{{ csrf_field() }}
			
			{{-- @if ()
				expr
			@endif --}}
			<p class="muted small">I campi sono pre-popolati a partire da quelli dell'ultimo host facente parte del progetto</p>


			@include('hosts.form')


			<div class="form-group">

				<button class="btn btn-primary" type="submit"><i class="fa fa-plus fa-lg"></i> Crea</button>

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
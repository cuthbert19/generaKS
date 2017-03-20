@extends('layouts.master')

@section('content')

<div class="row">

	<h1 class="display-4">Modifica l'host</h1>

</div>


<hr>


<div class="row">

	<form method="POST" action="/hosts/{{ $host->id }}">

		{{ method_field('PUT') }}
		{{ csrf_field() }}

		@include('hosts.form', ['oldhost' => $host ])


		<div class="form-group">

			<button class="btn btn-primary" type="submit"><i class="fa fa-pencil fa-lg"></i> Modifica</button>

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
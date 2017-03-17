@extends('layouts.master')

@section('content')

<div class="row"></div>

<h2 class="display-4">Host <strong>{{ $host->name }}</strong></h2>

<hr>


<form method="POST" action="/netdevices/{{ $netdevice->id }}">

	{{ method_field('PUT') }}

	{{ csrf_field() }}

	<table class="table table-striped table-bordered table-hover">

		<thead class="thead-inverse">

		@include('netdevices.intestazione',[ 'printhost' => false ])

		</thead>


		<tbody>

			<tr>

				@include('netdevices.form', ['oldnetdevice' => $netdevice ])

			</tr>

		</tbody>

	</table>

	<div class="form-group">

		<button class="btn btn-primary btn-lg " type="submit">Modifica</button>

		<a href="/hosts/{{ $host->id }}/netdevices"><button class="btn">Annulla</button></a>

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
@extends('layouts.master')

@section('content')


	<h2 class="display-4">Schema di partizionamento <strong>{{ $partitioning->name }}</strong></h2>

	<hr>


	<form method="POST" action="/diskobjects">

		{{ csrf_field() }}

		<p class="muted small">I campi sono pre-popolati a partire da quelli dell'ultimo device/mountpoint configurato sullo schema</p>

		<table class="table table-striped table-bordered table-hover">

			<thead class="thead-inverse">

				@include('diskobjects.intestazione')

			</thead>

			<tbody>
				
				{{-- visualizza i device/mountpoint gia' creati nel partitioning corrente --}}
				@foreach ( generaKS\Diskobject::where('partitioning_id',$partitioning -> id)->get() as $diskobject)

				<tr>

					@include('diskobjects.diskobject')

				</tr>

				@endforeach

				{{-- Riga per aggiungere un nuovo device/mountpoint --}}

				<tr>
					
					@include('diskobjects.form')

				</tr>

			</tbody>

		</table>


		<div class="form-group">

			<button class="btn btn-primary btn-lg " type="submit"><i class="fa fa-plus-square fa-lg"></i> Aggiungi</button>

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

@stop
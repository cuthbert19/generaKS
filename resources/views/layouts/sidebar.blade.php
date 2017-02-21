	@if ( $projects->count() > 0 )

		@foreach ($projects as $prj)

			<a href="/projects/{{ $prj->id }}" class="nav-link active">
				
				{{ $prj -> name }}

			</a>

		@endforeach
	
	@else

		<h3>Nessun progetto definito</h3>

	@endif
	@if ( isset($projects) )

		@if ( $projects->count() > 0 )

			@foreach ($projects as $prj)

				<a href="/projects/{{ $prj->id }}" class="nav-link active">
					
					{{ $prj -> name }}

				</a>

			@endforeach

		@endif
	
	@else

		<h3>Nessun progetto definito</h3>
		
	@endif
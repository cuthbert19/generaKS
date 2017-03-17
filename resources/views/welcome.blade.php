@extends('layouts.master')


@section('content')
	
	<div class="row">

			
			<div class="col-md-5">


				<a href="/projects/create">
					
					<button class="btn btn-lg btn-primary btn-block" id="newproject">Crea un nuovo progetto</button>

				</a>
				

			</div>


			<div class="col-md-5">
		

				<a href="/partitionings/create">
					
					<button class="btn btn-lg btn-primary btn-block" id="newproject">Crea un nuovo partizionamento</button>

				</a>


			</div>


	</div>	{{-- row --}}

	<example></example>

@stop
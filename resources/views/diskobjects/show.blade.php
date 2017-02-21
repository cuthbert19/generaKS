			<table class="table table-striped table-bordered table-hover">
					
				<thead class="thead-inverse">
			
					@include('diskobjects.intestazione')

				</thead>

				<tbody>
		
			  		@foreach (generaKS\Diskobject::all()->where('partitioning_id', '==', $partitioning_id) as $diskobject)

						<tr>

							@include('diskobjects.diskobject')
						
						</tr>

			  		@endforeach

				</tbody>

			</table>
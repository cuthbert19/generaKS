				<td class="vert-align">{{ $project->name}}</td>

				<td class="vert-align">{{ $project->ipVM}}</td>

				<td class="vert-align">{{ $project->subnetVM}}</td>
		
				<td class="vert-align">
		
					<ul class="list-group">

					@foreach ($project->hosts as $host)
		
						<li class="list-group-item">

							<a href="/hosts/{{ $host->id }}" class="nav-link">{{ $host->name}}</a>

						</li> 
					
					@endforeach
					
					</ul>
		
				</td>
				<td class="vert-align">{{ $host->name}}</td>

				<td class="vert-align">{{ $host->device}}</td>

				<td class="vert-align">{{ $host->macaddress}}</td>

				<td class="vert-align"><a href="{{ url('projects/' . $host->project->id) }}">{{ $host->project->name}}</a></td>
		
				<td class="vert-align">
		
				@if ($host->netdevices->count() > 0)

					<ul class="list-group">

					@foreach ($host->netdevices as $netdevice)
		
						<li class="list-group-item">

							<a href="/netdevices/{{ $netdevice -> id }}" class="nav-link">{{ $netdevice->name}}</a>

						</li> 
					
					@endforeach
					
					</ul>

				@endif
		
				</td>

				<td class="vert-align">
					
					<a href="{{ url('partitionings/' . $host->partitioning->id) }}">{{ $host->partitioning->name}}</a>

				</td>
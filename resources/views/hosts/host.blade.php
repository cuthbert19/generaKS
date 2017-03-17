				<td class="vert-align">{{ $host->name}}</td>

				<td class="vert-align">{{ $host->device}}</td>

				<td class="vert-align">{{ $host->macaddress}}</td>

				<td class="vert-align"><a href="{{ url('projects/' . $host->project->id) }}">{{ $host->project->name}}</a></td>

				<td class="vert-align">


					{{-- lista interfacce configurate sull'host --}}
					@if ($host->netdevices->count() > 0)

					<div class="panel-group">
						<div class="panel panel-default small">
							<div class="panel-heading small">
								<p class="panel-title small">
									<a data-toggle="collapse" href="#{{$host->name . "_netdevs"}}"><small>Interfacce configurate</small></a>
								</p>
							</div>
							<div id="{{$host->name . "_netdevs"}}" class="panel-collapse collapse">

								<ul class="list-group">

									@foreach ($host->netdevices->sortBy('name') as $netdevice)

									<li class="list-group-item">

										<a href="/netdevices/{{ $netdevice -> id }}" class="nav-link">{{ $netdevice->name}}</a>

									</li> 

									@endforeach

								</ul>

							</div> {{-- id="{{$host->name . "_netdevs"}} --}}

						</div> {{-- panel panel-default small --}}

					</div> {{-- panel-group --}}

					@else

					<p><small>Nessuna interfaccia configurata</small></p>

					@endif

					<div class="panel-footer">

						{{-- inserisci nuova interfaccia --}}
						<form method="GET" action="/hosts/{{ $host->id }}/netdevices">

							<button class="list-group-item btn btn-sm btn-outline-primary small" type="submit"><i class="fa fa-plus"></i> Aggiungi interfaccia</button>

						</form>

					</div>	{{-- panel-footer --}}

				</td>

				<td class="vert-align">

					<a href="{{ url('partitionings/' . $host->partitioning->id) }}">{{ $host->partitioning->name}}</a>

				</td>
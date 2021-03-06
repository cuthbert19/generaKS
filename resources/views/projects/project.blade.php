				<td class="vert-align">{{ $project->name}}</td>

				<td class="vert-align">{{ $project->ipVM}}</td>

				<td class="vert-align">{{ $project->subnetVM}}</td>

				<td class="vert-align">

					{{-- lista host inseriti nel progetto --}}
					@if ( $project->hosts->count()>0 )

					<div class="panel-group">
						<div class="panel panel-default small">
							<div class="panel-heading small">
								<p class="panel-title small">
									<a data-toggle="collapse" href="#{{$project->name . "_hosts"}}"><small>Hosts configurati</small></a>
								</p>
							</div>
							<div id="{{$project->name . "_hosts"}}" class="panel-collapse collapse">

								<ul class="list-group">	
									@foreach ($project->hosts as $host)

									<li class="list-group-item">

										<div class="col-sm-9" align="left"><a href="/hosts/{{ $host->id }}" class="nav-link">{{ $host->name}}</a></div>
										<div class="col-sm-1" align="right"><a href="/hosts/{{ $host->id }}/edit" data-toggle="tooltip" title="Modifica"><i class="fa fa-pencil fa-lg"></i></a></div>
										<div class="col-sm-1" align="right"><a href="/hosts/{{ $host->id }}/delete" data-toggle="tooltip" title="Elimina"><i class="fa fa-trash-o fa-lg"></i></a></div>

									</li>

									@endforeach
									
								</ul>

							</div> {{-- id="{{$host->name . "_netdevs"}} --}}

						</div> {{-- panel panel-default small --}}

					</div> {{-- panel-group --}}

					@else

					<p>Nessun host presente</p>

					@endif

				</ul>

				{{-- inserisci nuovo host --}}
				<div class="panel-footer">
					<form method="GET" action="/projects/{{ $project->id }}/hosts">

						{{ Session::put('urlBack',\Request::getRequestUri() ) }}

						<button class="list-group-item btn-outline-primary btn-sm small" type="submit"><i class="fa fa-plus"></i> Aggiungi host</button>

					</form>
				</div>

			</td>
				<td class="vert-align">

					<a href="{{ url('hosts/' . $netdevice->host->id) }}">
					
						{{ $netdevice->host->name}}

					</a>

				</td>

				<td class="vert-align">{{ $netdevice->name}}</td>

				<td class="vert-align">{{ $netdevice->pcislot}}</td>

				<td class="vert-align">{{ $netdevice->linkstatus}}</td>

				<td class="vert-align">{{ $netdevice->isbondmaster ? 'Sì' : 'no'}}</td>

				<td class="vert-align">{{ $netdevice->bondslave}}</td>

				<td class="vert-align">{{ $netdevice->ipaddr}}</td>

				<td class="vert-align">{{ $netdevice->netmask}}</td>

				<td class="vert-align">{{ $netdevice->gateway}}</td>

				<td class="vert-align">{{ $netdevice->bcksubnet}}</td>

				<td class="vert-align">{{ $netdevice->bckmask}}</td>
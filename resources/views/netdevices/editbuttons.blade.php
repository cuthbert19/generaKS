<td class="vert-align">
	
	{{ Session::put('urlBack',\Request::getRequestUri() ) }}

	<a href="/netdevices/{{ $netdevice->id }}/edit" data-toggle="tooltip" title="Modifica"><i class="fa fa-pencil fa-lg"></i></a>
	<a href="/netdevices/{{ $netdevice->id }}/delete" data-toggle="tooltip" title="Elimina"><i class="fa fa-trash-o fa-lg"></i></a>


</td>

<script></script>
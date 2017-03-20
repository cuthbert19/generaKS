<td class="vert-align">

	{{ Session::put('urlBack',\Request::getRequestUri() ) }}
	
	<a href="/hosts/{{ $host->id }}/edit" data-toggle="tooltip" title="Modifica"><i class="fa fa-pencil fa-lg"></i></a>
	
	<a href="/hosts/{{ $host->id }}/delete" data-toggle="tooltip" title="Elimina"><i class="fa fa-trash-o fa-lg"></i></a>

</td>
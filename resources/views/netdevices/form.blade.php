
@include('layouts.inputcella', 
	[
	'name'			=> 'name',
	'input_type'	=> 'text',
	'required'		=>	'1',
				//'value'			=>	(old('name') != null) ? old('name') : (isset($oldnetdevice) ? $oldnetdevice->name : ''),
	'value'			=>	old('name',(isset($oldnetdevice) ? $oldnetdevice->name : '')),

	])

@include('layouts.inputcella', 
	[
	'name'			=> 'pcislot',
	'input_type'	=> 'text',
	'required'		=>	'0',
	'value'			=>	old('pcislot',(isset($oldnetdevice) ? $oldnetdevice->pcislot : '')),

	])

	<td class="vert-align fill">

		<select name="linkstatus" id="linkstatus">
			<option value="0" @if(old('linkstatus')) {{ old('linkstatus') == 0 ? 'selected' : ''}} @else @if (isset($oldnetdevice)) {{ $oldnetdevice->linkstatus == 'Down' ? 'selected' : ''}} @endif @endif>Down</option>
			<option value="1" @if(old('linkstatus')) {{ old('linkstatus') == 1 ? 'selected' : ''}} @else @if (isset($oldnetdevice)) {{ $oldnetdevice->linkstatus == 'Up' ? 'selected' : ''}} @endif @endif>Up</option>

		</select>

	</td>


	<td class="vert-align fill">

		<select name="isbondmaster" id="isbondmaster">

			<option value="0" @if(old('isbondmaster')) {{ old('isbondmaster') == 0 ? 'selected' : ''}} @else @if (isset($oldnetdevice)) {{ $oldnetdevice->isbondmaster == 'No' ? 'selected' : ''}} @endif @endif>No</option>
			<option value="1" @if(old('isbondmaster')) {{ old('isbondmaster') == 1 ? 'selected' : ''}} @else @if (isset($oldnetdevice)) {{ $oldnetdevice->isbondmaster == 'Sì' ? 'selected' : ''}} @endif @endif>Sì</option>

		</select>

	</td>


	<td class="vert-align fill">

		<select name="bondslave" id="bondslave">
			<option value="0" @if(old('bondslave')) {{ old('bondslave') == 0 ? 'selected' : ''}} @else @if (isset($oldnetdevice)) {{ $oldnetdevice->bondslave == 'nessuno' ? 'selected' : ''}} @endif @endif>nessuno</option>
			@foreach ($bondmasters as $bondmaster)
			<option value="{{$bondmaster->id}}" {{(old('bondslave') != null) ? old('bondslave') : (isset($oldnetdevice) ? ($oldnetdevice->bondslave == $bondmaster->id ? 'selected' : '') : '')}}>{{$bondmaster->name}}</option>
			@endforeach
		</select>

	</td>


	@include('layouts.inputcella', 
		[
		'name'			=> 'ipaddr',
		'input_type'	=> 'text',
		'required'		=>	'0', 
		'value'			=>	old('ipaddr',(isset($oldnetdevice) ? $oldnetdevice->ipaddr : '')),
		])

	@include('layouts.inputcella', 
		[
		'name'			=> 'netmask',
		'input_type'	=> 'text',
		'required'		=>	'0', 
		'value'			=>	old('netmask',(isset($oldnetdevice) ? $oldnetdevice->netmask : '')),
		])


	@include('layouts.inputcella', 
		[
		'name'			=> 'gateway',
		'input_type'	=> 'text',
		'required'		=>	'0', 
		'value'			=>	old('gateway',(isset($oldnetdevice) ? $oldnetdevice->gateway : '')),
		])


	@include('layouts.inputcella', 
		[
		'name'			=> 'bcksubnet',
		'input_type'	=> 'text',
		'required'		=>	'0', 
		'value'			=>	old('bcksubnet',(isset($oldnetdevice) ? $oldnetdevice->bcksubnet : '')),
		])


	@include('layouts.inputcella', 
		[
		'name'			=> 'bckmask',
		'input_type'	=> 'text',
		'required'		=>	'0', 
		'value'			=>	old('bckmask',(isset($oldnetdevice) ? $oldnetdevice->bckmask : '')),
		])



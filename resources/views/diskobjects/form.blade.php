			@include('layouts.inputcella', 
				[
				'name'			=> 'device',
				'input_type'	=> 'text',
				'required'		=>	'1',
				'value'			=>	(old('device') != null) ? old('device') : (isset($olddiskobject) ? $olddiskobject->device : ''),

				])

			<td class="vert-align fill">

				<select name="devicetype" id="devicetype">
					@foreach (generaKS\Diskobject::$devicetypes as $devtype)
						<option value="{{array_search($devtype,generaKS\Diskobject::$devicetypes)}}" 
							{{(old('devicetype') != null) ? old('devicetype') : 
								(isset($olddiskobject) ? ($olddiskobject->devicetype == array_search($devtype,generaKS\Diskobject::$devicetypes) ? 'selected' : '') 
									: '')}}>{{$devtype}}</option>
					@endforeach
				</select>

			</td>


			@include('layouts.inputcella', 
				[
				'name'			=> 'size',
				'input_type'	=> 'text',
				'required'		=>	'0',
				'value'			=>	(old('size') != null) ? old('size') : (isset($olddiskobject) ? $olddiskobject->size : ''),

				])


			@include('layouts.inputcella', 
				[
				'name'			=> 'fstype',
				'input_type'	=> 'text',
				'required'		=>	'0', 
				'value'			=>	(old('device') != null) ? old('device') : (isset($olddiskobject) ? $olddiskobject->fstype : ''),
				])


			@include('layouts.inputcella', 
				[
				'name'			=> 'logicalname',
				'input_type'	=> 'text',
				'required'		=>	'0', 
				'value'			=>	(old('device') != null) ? old('device') : (isset($olddiskobject) ? $olddiskobject->logicalname : ''),
				])

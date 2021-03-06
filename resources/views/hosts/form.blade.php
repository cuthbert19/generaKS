			@include('layouts.inputriga', 
				[
					'label_text'	=> 'Progetto',
					'label_id'		=> 'progetto',
					'field_name'	=> 'progetto',
					'input_type'	=> 'text',
					'required'		=>	'1',
					'value'			=>	$project->name,
					'optional'		=>	'disabled',

				])

			@include('layouts.inputriga', 
				[
					'label_text'	=> 'Hostname',
					'label_id'		=> 'name',
					'field_name'	=> 'name',
					'input_type'	=> 'text',
					'required'		=>	'1',
					{{-- 'value'			=>	(old('name') != null) ? old('name') : (isset($oldhost) ? $oldhost->name : ''), --}}
					'value'			=>	old('name',(isset($oldhost) ? $oldhost->name : '')),

				])

			@include('layouts.inputriga', 
				[
					'label_text'	=> 'Device per autodeploy',
					'label_id'		=> 'device',
					'field_name'	=> 'device',
					'input_type'	=> 'text',
					'required'		=>	'1',
					{{-- 'value'			=>	isset($oldhost) ? $oldhost->device : '', --}}
					'value'			=>	old('device',(isset($oldhost) ? $oldhost->device : '')),

				])

			@include('layouts.inputriga', 
				[
					'label_text'	=> 'MAC Address',
					'label_id'		=> 'macaddress',
					'field_name'	=> 'macaddress',
					'input_type'	=> 'text',
					'required'		=>	'1', 
					'value'			=>	isset($oldhost) ? $oldhost->macaddress : '',
					'value'			=>	old('macaddress',(isset($oldhost) ? $oldhost->macaddress : '')),
				])


			<div class="form-group row">

				<label for="partitioning" class="col-4 col-form-label">Schema di partizionamento</label>
				
				<div class="col-8">

					<select name="partitioning_id" id="partitioning" class="form-control tall" >
						
						@foreach ($partitionings as $partitioning)
							
							<option value="{{ $partitioning -> id }}" name="partitioning" @if(old('partitioning_id')) {{ old('partitioning_id') == $partitioning -> id ? 'selected' : ''}} @else @if (isset($oldhost)) {{ $oldhost->partitioning_id == $partitioning -> id ? 'selected' : ''}} @endif @endif>{{ $partitioning->name }}</option>

						@endforeach

					</select>
				
				</div>

			</div>
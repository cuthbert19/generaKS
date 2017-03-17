		<td class="vert-align fill">
			
			<input type="{{$input_type}}" class="form-control" id="{{ $name }}" name="{{ $name }}" value="{{ $value or '' }}" {{ ( isset($required) and ($required==1) ) ? 'required' : '' }} {{ $optionale or '' }}>
		
			{{-- <input type="{{$input_type}}" class="form-control" id="{{ $name }}"> --}}
		</td>
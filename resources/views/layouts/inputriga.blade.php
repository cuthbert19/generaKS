		<div class="form-group row">

			<label for="{{$label_id}}" class="col-sm-4 col-form-label">{{$label_text}}</label>
			
			<div class="col-sm-8">

				<input type="{{$input_type}}" class="form-control" id="{{$label_id}}" name="{{$field_name}}" value="{{ isset($value) ? $value : '' }}" {{ ( isset($required) and ($required==1) ) ? 'required' : '' }} {{ isset($optional) ? $optional : '' }}>
			
			</div>

		</div>
@extends('layouts.master')

@section('content')


	<ul class="nav nav-tabs" role="tablist">

		@foreach ($partitionings as $partitioning)

			<li class="nav-item">

		    	<a class="nav-link {{ $partitioning->id == 1 ? 'active' : '' }}" data-toggle="tab" href="#{{ $partitioning->name }}" role="tab">{{ $partitioning->name }}</a>

		    </li>

		@endforeach

	</ul>


	<div class="tab-content">
  		
	  @foreach ($partitionings as $partitioning)

  		<div class="tab-pane {{ $partitioning->id == 1 ? 'active' : '' }}" id="{{ $partitioning->name }}" role="tabpanel">

			@include('diskobjects.show', ['partitioning_id' => $partitioning->id])

  		</div>

  	  @endforeach

	</div>
	

@stop
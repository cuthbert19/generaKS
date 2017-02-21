@extends('layouts.master')

@section('content')


	<h2 class="display-4">Schema di partizionamento <strong>{{ $partitioning->name }}</strong></h2>

	@include('diskobjects.show', ['partitioning_id' => $partitioning->id])


@stop
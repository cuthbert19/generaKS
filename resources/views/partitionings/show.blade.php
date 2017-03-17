@extends('layouts.master')

@section('content')


	<h2 class="display-4">Schema di partizionamento <strong>{{ $partitioning->name }}</strong></h2>

	@include('diskobjects.show', ['partitioning_id' => $partitioning->id])

	<a href="/partitionings/{{ $partitioning->id }}/diskobjects"><button class="btn btn-primary"><i class="fa fa-plus-square fa-lg"></i> Aggiungi nuovo device/mountpoint</button></a>


@stop
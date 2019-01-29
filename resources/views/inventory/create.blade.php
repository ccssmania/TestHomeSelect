@extends('layouts.app')
@section('title', 'Create Inventory')
@section('content')
<div class="container-white">
	@include('inventory.form', ['url' => url('/inventory'), 'method' => 'POST'])
</div>
@endsection
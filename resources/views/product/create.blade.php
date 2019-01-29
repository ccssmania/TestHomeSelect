@extends('layouts.app')
@section('title', 'Create Product')
@section('content')
<div class="container-white">
	@include('product.form', ['url' => url('/product'), 'method' => 'POST'])
</div>
@endsection
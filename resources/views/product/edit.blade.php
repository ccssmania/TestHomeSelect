@extends('layouts.main')
@section('title', 'Edit Product')
@section('content')
<div class="container-white">
	@include('product.form', ['url' => url('/product/edit/'.$product->id), 'method' => 'POST'])
</div>
@endsection
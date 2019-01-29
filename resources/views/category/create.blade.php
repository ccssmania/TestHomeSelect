@extends('layouts.app')
@section('title', 'Create Category')
@section('content')
<div class="container-white">
	@include('category.form', ['url' => url('/category'), 'method' => 'POST'])
</div>
@endsection
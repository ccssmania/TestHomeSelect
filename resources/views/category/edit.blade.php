@extends('layouts.app')
@section('title', 'Edit Category')
@section('content')
<div class="container-white">
	@include('category.form', ['url' => url('/category/edit/'.$category->id), 'method' => 'POST'])
</div>
@endsection
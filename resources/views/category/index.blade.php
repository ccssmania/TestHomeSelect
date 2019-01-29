@extends("layouts.app")
@section("content")
	<div class="big-padding text-center blue-grey shite-text">
		<h1>Categories</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead class="elegant-color" style="background-color: #32383e; color: white;">
				<tr>
					<td>Name</td>
					<td>Description</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)
				<tr>
					<td>{{ $category->name }}</td>
					<td>{!! $category->description !!}</td>
					<td>
						<a href="{{url('/category/'. $category->id .'/edit')}}">Editar</a>
					</td>
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{{$categories->links()}}
	</div>
	<div class="floating">
		<a href="{{url('/category/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection


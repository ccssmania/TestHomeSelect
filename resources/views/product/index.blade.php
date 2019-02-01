@extends("layouts.app")
@section("content")
	<div class="big-padding text-center blue-grey shite-text">
		<h1>Products</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead class="elegant-color" style="background-color: #32383e; color: white;">
				<tr>
					<td>Name</td>
					<td>Description</td>
					<td>Price</td>
					<td>Stock</td>
					<td>Category</td>
					<td>Actions</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{!! $product->description !!}</td>
					<td>{{ $product->price }}</td>
					<td>{{ $product->stock ? $product->stock->stock }}</td>
					<td>{{ $product->category->name }}</td>
					<td>
						<a href="{{url('/product/'. $product->id .'/edit')}}">Edit</a>
						<a href="{{url('/product/'.$product->id.'/inventory')}}" class="text-blue">Inventory</a>
						@if( $product->stock && $product->stock->stock == 0 || null)
							@include('product.delete',['product' =>$product])
						@endif
					</td>
					@endforeach
				</tr>
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{{$products->links()}}
	</div>
	<div class="floating">
		<a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
	</div>
@endsection


@extends("layouts.app")
@section("content")
	<div class="big-padding text-center blue-grey shite-text">
		<h1>Inventory</h1>
	</div>
	<div class="container">
		<table class="table table-bordered">
			<thead class="elegant-color" style="background-color: #32383e; color: white;">
				<tr>
					<td>Created_at</td>
					<td>Quantity</td>
					<td>Product</td>
				</tr>
			</thead>
			<tbody>
				@foreach ($inventories as $inventory)
					<tr class="{{$inventory->type == 0 ?  'bg-success' : 'bg-danger' }}">
						<td>{{ $inventory->created_at }}</td>
						<td>{{ $inventory->quantity }}</td>
						<td>{{ $inventory->product->name }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="text-center">
		{{$inventories->links()}}
	</div>
	<div class="floating">
		@if(isset($product))
		<a href="{{url('/inventory/create/'.$product->id)}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
		@else
		<a href="{{url('/inventory/create')}}" class="btn btn-primary btn-fab">
			<i class="material-icons">add</i>
		</a>
		@endif
	</div>
@endsection


<form class="inline_block" id="productDelete" action="{{url('/product/delete/'.$product->id)}}" method="POST">
	{{ csrf_field() }}
	<input type="submit" class="btn btn-link text-red no-padding no-margin no-transform" value="Delete">
</form>
<div class="">
	<div class="row">
		<div class="col-md-10 big-margin-bot little-margin-left">
			<div class="panel" >
				<div class="panel-heading text-black" style="background-color: #64b5f6;">Prouduct </div>
				<form class="form-horizontal big-margin-top" method="{{$method}}" action="{{$url}}" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<label class="col-md-4 control-label">Add or remove</label>
						<div class="col-md-6">
							<select class="form-control" name="type" required>
								<option value="">Select One</option>
								<option value="{{env('ADD_STOCK')}}" {{$inventory->status == env('ADD_STOCK') ? 'selected' : ''}} >Add Stock</option>
								<option value="{{env('REMOVE_STOCK')}}" {{$inventory->status == env('REMOVE_STOCK') ? 'selected' : ''}}>Remove Stock</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Quantity</label>
						<div class="col-md-6">
							<input class="form-control" type="number"  name="quantity" value="{{old('quantity')}}" placeholder="{{$inventory->quantity ? $inventory->quantity : ''}}" {{$inventory->quantity ? '' : 'required'}}>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Product</label>
						<div class="col-md-6">
							<select class="form-control" id="select" name="product_id" required>
								<option value="{{isset($preProduct)? $preProduct->id : ''}}">{{isset($preProduct)? $preProduct->name : ''}}</option>
								@foreach($products as $product)
									<option value="{{$product->id}}">{{$product->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					
					<div class="form-group big-margin-bot">

						<div class="col-md-6 text-right ">
							<input type="submit" value="Enviar" class="btn btn-success">
						</div>
						<div class="col-md-6 ">
							<a href="{{url('/inventory')}}" class="btn btn-info">back</a>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>


<div class="">
	<div class="row">
		<div class="col-md-10 big-margin-bot little-margin-left">
			<div class="panel" >
				<div class="panel-heading text-black" style="background-color: #64b5f6;">Prouduct </div>
				<form class="form-horizontal big-margin-top" method="{{$method}}" action="{{$url}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					
					<div class="form-group ">
						<label class="col-md-4 control-label">Name </label>
						<div class="col-md-6">
							<input type="text" name="name"  placeholder="{{$product->name ? $product->name : 'Nombre'}}" value="{{old('name')}}" class="form-control" {{$product->name ? '' : 'required'}}>
						</div>
					</div>
					<div class="form-group">
						<label  class="col-md-4 control-label">Description </label>

						<div class="col-md-6">
							<textarea class="textarea" name="description" >{{$product->description ? $product->description : ''}} {{old('description') ? old('description') : ''}}</textarea>
							@if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label">Price</label>
						<div class="col-md-6">
							<input class="form-control" type="number" step="0.5" name="price" value="{{old('price')}}" placeholder="{{$product->price ? $product->price : ''}}" {{$product->price ? '' : 'required'}}>
						</div>
					</div>
					@if($url != url('/product/edit/'.$product->id))
					<div class="form-group">
						<label class="col-md-4 control-label">Stock</label>
						<div class="col-md-6">
							<input class="form-control" type="number" name="stock" value="{{old('stock')}}" placeholder="{{$product->price ? $product->price : ''}}">
						</div>
					</div>
					@endif
					<div class="form-group">
							<label class="col-md-4 control-label">Category</label>
							<div class="col-md-6">
								<select id="select" class="form-control" name="category_id" required>
									<option value="" >Select One</option>
									@foreach($categories as $category)
										<option value="{{$category->id}}" {{$product->category_id && $product->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
					<div class="form-group big-margin-bot">

						<div class="col-md-6 text-right ">
							<input type="submit" value="Enviar" class="btn btn-success">
						</div>
						<div class="col-md-6 ">
							<a href="{{url('/products')}}" class="btn btn-info">back</a>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>


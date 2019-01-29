<div class="">
	<div class="row">
		<div class="col-md-10 big-margin-bot little-margin-left">
			<div class="panel" >
				<div class="panel-heading text-black" style="background-color: #64b5f6;">Category </div>
				<form class="form-horizontal big-margin-top" method="{{$method}}" action="{{$url}}" enctype="multipart/form-data">
					{{ csrf_field() }}
					
					<div class="form-group ">
						<label class="col-md-4 control-label">Name </label>
						<div class="col-md-6">
							<input type="text" name="name" value="{{old('name')}}"  placeholder="{{$category->name ? $category->name : 'Nombre'}}" class="form-control" {{$category->name ? '' : 'required'}}>
						</div>
					</div>
					<div class="form-group">
						<label  class="col-md-4 control-label">Description </label>

						<div class="col-md-6">
							<textarea class="textarea" name="description">{{$category->description ? $category->description : ''}} {{old('description') ? old('description') : ''}}</textarea>
							@if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
						</div>
					
					<div class="form-group big-margin-bot">

						<div class="col-md-6 text-right ">
							<input type="submit" value="Enviar" class="btn btn-success">
						</div>
						<div class="col-md-6 ">
							<a href="{{url('/category')}}" class="btn btn-info">back</a>
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>


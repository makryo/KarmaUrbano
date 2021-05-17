@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form action="{{route('admin.publicacion.store')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group" wfd-id="331">
			    	<label for="formFile" class="form-label mt-4" wfd-id="332">Imagen para publicacion</label>
			    	@csrf
			    	<input class="form-control" type="file" id="formFile" wfd-id="502" name="url" accept="image/*">
			    	@error('url')
			    		<small class="text-danger">esto no es una imagen perro</small>
			    	@enderror
			    	<br>

			    	 <div class="form-group" wfd-id="333">
				      <label for="exampleTextarea" class="form-label mt-4" wfd-id="334">Descripcion</label>
				      <textarea class="form-control" id="exampleTextarea" rows="3" wfd-id="515" 
				      	style="
				      		margin-top: 0px; 
				      		margin-bottom: 0px; 
				      		height: 150px;
				      		width: 735px;"
				      	name="descripcion"> 
				      </textarea>
				    </div>
				    <br>
				    @error('descripcion')
			    		<small class="text-danger">esto se pasa de 255 perro</small>
			    	@enderror
				   	<br>
			    	<button type="submit" class="btn btn-primary">subir</button>
			    </div>
		    </form>
		</div>
	</div>
</div>

@endsection
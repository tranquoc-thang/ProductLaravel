@extends('layout')
@section('content')
	<div class="container-fluid">
		@if($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="POST" action="{{route('insert')}}" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="productname">Tên sản phẩm</label>
				<input type="text" name="productname" id="productname" class="form-control">
			</div>
			<div class="form-group">
				<label for="unit">Đơn vị</label>
				<select name="unit" id="unit" class="form-control">
					<option value="Cái">Cái</option>
					<option value="Bộ">Bộ</option>
					<option value="Chiếc">Chiếc</option>
				</select>
			</div>
			<div class="form-group">
				<label for="price">Đơn giá</label>
				<input type="text" name="price" id="price" class="form-control">
			</div>
			<div class="form-group">
				<label for="categories">Loại sản phẩm</label>
				<select name="categories" id="categories" class="form-control">
					@foreach($category as $c)
					<option value="{{$c->CategoryId}}">{{$c->CategoryName}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="img">Hình sản phẩm</label>
				<input type="file" name="fileUpload" id="fileUpload" class="form-control">
			</div>
			<div class="form-group">
				<button style="cursor: pointer;" type="submit" class="btn btn-primary">Thêm</button>
			</div>
		</form>
	</div>
@stop
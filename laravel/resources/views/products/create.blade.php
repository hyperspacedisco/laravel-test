@extends('master')


@section('content')

<h1>Add New Product</h1>

<form action="/products/store" method="post">

{{-- makes sure the token that the token number associated with the submit match sending unfiltered/unescaped data. --}}
	{!! csrf_field() !!}
	
	<div>
	{{-- name input field. Validation shows, and prints out an error message. the old() value is what "sticks" in the form when the error shows up --}}
		<label for="name">Name: </label>
		<input type="text" id="name" name="name" step=".01" placeholder="Phone" value="{{ old('name') }}">
		@if($errors->first('name'))

			<p style="color: red">{{  $errors->first('name')  }}</p>

		@endif
	</div>
	<div>
		<label for="description">Description: </label>
		<textarea id="description" name="description" cols="50" rows="10">{{ old('description') }}</textarea> 
		@if($errors->first('description'))

			<p style="color: red">{{  $errors->first('description')  }}</p>

		@endif
	</div>
	<div>
		<label for="price">Price: $</label>
		<input type="number" id="price" name="price" value="{{ old('price') }}">
		@if($errors->first('price'))

			<p style="color: red">{{  $errors->first('price')  }}</p>

		@endif
	</div>	
	<div>
		<label for="stock">Stock: </label>
		<input type="number" id="stock" name="stock" value="{{ old('price') }}">
		@if($errors->first('stock'))

			<p style="color: red">{{  $errors->first('stock')  }}</p>

		@endif
	</div>
	<input type="submit" value="add new product">
</form>


@endsection
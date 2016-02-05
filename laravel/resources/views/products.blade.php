@extends('master')

@section('content')
	<h1>Products</h1>

	<a href="/products/create">Add a new product</a>

	<h3>Popular products: </h3>
	@foreach($popularProducts as $product)
		<p>{{ $product }}</p>
	@endforeach

	<h3>Latest: </h3>
	@foreach($products as $product)
		<p><a href="/products/{{ $product->id }}"><strong>{{ $product['name'] }} </strong>at ${{ $product['price'] }} each.</a></p>
		<hr />
	@endforeach
@endsection
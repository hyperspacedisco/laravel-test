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
		<p><strong>{{ $product['name'] }} </strong>at ${{ $product['price'] }} each. {{ $product['stock']}} in stock.</p>
		<p><em>{{ $product['description']}}</em></p>
		<hr />
	@endforeach
@endsection
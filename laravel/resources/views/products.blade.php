@extends('master')

@section('content')
	<h1>Products</h1>

	<h3>Popular products: </h3>
	@foreach($popularProducts as $product)
		<p>{{ $product }}</p>
	@endforeach

	<h3>Latest: </h3>
	@foreach($products as $product)
		<p>{{ $product['name'] }} at {{ $product['price'] }} each. {{ $product['stock']}} in stock.</p>
	@endforeach
@endsection
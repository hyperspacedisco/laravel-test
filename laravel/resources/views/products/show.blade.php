@extends('master')

@section('content')



	<h1>{{  $product['name'] }}</h1>

	<a href="/products/{{ $product->id}}/edit">Edit details</a>

	<h3>{{  $product['price'] }}</h3>

	<p>{{  $product['stock'] }}</p>

	<p>{{ $product['description'] }}</p>

@endsection
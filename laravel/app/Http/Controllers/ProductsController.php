<?php

namespace App\Http\Controllers;

use App\product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    //in charge of showing default products page
    public function index() {

    	$products = Product::all();

    	$popularProducts = [];
    	return view('products', compact('products', 'popularProducts'));
    }

    public function create() {

    	return view('products.create');
    }

    public function store( Request $request ) {

    	$this->validate($request, [

    			'name' => 'required|min:2|max:10',
    			'description' => 'required|between:20,1000',
    			'price' => 'required|numeric|max:9999.99|min:.01',
    			'stock' => 'required|integer|min:0|max:65000'


    		]);

    	$newProduct = new Product( $request->all() );

    	// $newProduct->name = $request->name;
    	// $newProduct->description = $request->description;
    	// $newProduct->price = $request->price;
    	// $newProduct->stock = $request->stock;

    	$newProduct->save();

    	return redirect('products');
    }

}



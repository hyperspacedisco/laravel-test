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
}

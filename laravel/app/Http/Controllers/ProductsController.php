<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    //in charge of showing default products page
    public function index() {

    	$products = [
    		[
    			'name' => 'apple',
    			'price' => '$1'
    		],

    		[
    			'name' => 'banana',
    			'price' => '$1.50'
    		]
    	];

    	$popularProducts = [];
    	return view('products', compact('products', 'popularProducts'));
    }
}

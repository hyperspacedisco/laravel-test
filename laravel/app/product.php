<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //making sure that only the required items in the form are sent to database

    protected $fillable = [ 'name', 'description', 'price', 'stock'];

}
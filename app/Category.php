<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable=['nombre','slug','descripcion'];



    public function products(){
    	
    	return $this->hasMany(Product::class);

    	// si ocupe un nombre distinto Category al crear el campo como ejem. en español "categoria_id" seria
    	//return $this->hasMany(Product::class,'categoria_id');


    }
}

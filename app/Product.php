<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){

    	// Cualquiera de las dos formas sirve
    	//return $this->belongsTo(Category::class);
    	return $this->belongsTo('App\Category');
    	// si ocupe un nombre distinto Category al crear el campo como ejem. en español "categoria_id" seria
    	//return $this->belongsTo('App\Category','categoria_id' );
	} 
	
	public function images(){
		return $this->morphMany('App\Image','imageable');

	}
}

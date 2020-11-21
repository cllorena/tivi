<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        /*$cat = new Product();
        $cat->nombre        ='Verduras';
        $cat->slug          ='verduras';
        $cat->descripcion   ='Las Mejores verduras sureñas';
        $cat->save();
        return $cat;
        */
        return Product::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function show($slug)
    {
        if (Product::where('slug',$slug)->first()) {
            return 'Slug existe';
        }
        else{
            return 'Slug disponible';
        }
    }
}

<?php

use Illuminate\Support\Facades\Route;

use App\Product;
use App\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

/*$prod = new Product();
$prod->nombre = 'Cebolla';
$prod->slug = 'Cebolla';
$prod->descripcion_corta = 'Mejores Verduras';
$prod->descripcion_larga = 'Mejores Verduras del Sur de productores CHilenos, de gran calidad y un sabroso gusto';
$prod->especificaciones = 'Verduras seleccionados';
$prod->datos_de_interes = 'Producido por productores colonos Alemanes';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal = 'No';
$prod->category_id = 2;
$prod->save();
return $prod;
*/

/*$prod = Product::find(1)->first();*/
/*$prod = Product::find(3)->first()->category;*/
//$prod = Product::find(2)->category;
//return $prod;

//Para Buscar Categorias y si agrego "->products" me muestra todos los productos de esa categoria
//$cat = Category::find(1)->products;
//return $cat;

return view('tienda.index');



//    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::get('/admin', function () {
	return view('plantilla.admin');
})->name('admin');


Route::resource('admin/category', 'Admin\AdminCategoryController')->names('admin.category');

Route::resource('admin/product', 'Admin\AdminProductController')->names('admin.product');


Route::get('cancelar/{ruta}',function($ruta) {
    return redirect()->route($ruta)->with('cancelar','Accion Cancelada!');
})->name('cancelar');





// CLLA
Route::get('categorias', function () {
    $categorias = Category::paginate(2);
    return view('admin.category.index')->withCategorias($categorias);
});
// FIN CLLA

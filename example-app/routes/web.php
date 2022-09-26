<?php
class HandleExceptions { }
use App\Http\Controllers\ProductController;
use Illuminate\Auth\Access\Gate;
use Illuminate\Contracts\Auth\Access\Gate as AccessGate;
use Illuminate\Support\Facades\Gate as FacadesGate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard',[ProductController::class, 'index']);

Route::get('/admin', function() {
    if (!FacadesGate::allows('access-admin')) {
        return 'ACCESS DENIED';
    }
    return view('admin');
});

Route::get('/products', function () {
    return view('products');
});


// get /products
// -> liste des produits
Route::get('/products', [ProductController::class, 'index']);

//post /products
// -> creation d'un produit
Route::post('/products', [ProductController::class, 'store']);
//get /products/(id)
// -> récuperer le produit qui possède l'id
Route::get('/products/{id}', [ProductController::class, 'show']);

//put /products/(id)
// -> modifier le produit donné

//delete /products/(id)
// -> supprimer le produit


Route::get('/catalogue', function() {
    return view('catalogue');
});

Route::get('/image', function() {
    return view('image');
});

require __DIR__.'/auth.php';

Route::get('/cart', function() {
    return view('cart');
});

Route::resources('product', ProductController::class);


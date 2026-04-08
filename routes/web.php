<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\IndustriesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
/// para el chatbot

Route::post('/chatbot', [ChatbotController::class, 'ask'])->name('chatbot.ask');

////// inicio de la app

Route::get('/', function () {

    return view('welcome');
})->name('web.index');

Route::get('/about', function (){
    return view('web.about');
})->name('web.about');


Route::get('/contact', function (){
    return view('web.contacUs');
})->name('web.contact');

Route::get('/engineering', function (){
    return view('web.engeneering');
})->name('web.engineering');

Route::get('/manufacturing', function (){
    return view('web.manufacturing');
})->name('web.manufacturing');

Route::get('/quality', function (){
    return view('web.quality');
})->name('web.quality');

Route::get('/solutions', function (){
    return view('web.solutions');
})->name('web.solutions');

Route::get('/video-process', function (){
    return view('videoProcess');
})->name('web.videoProcess');

///////////////////product

Route::get('/productsForSale', [ProductController::class, 'IndexProduct'])->name('product.list');

Route::get('/product/{id}', function ($id) {
    return view('web.product.productdetail');
})->name('product.detail');

Route::get('/industries/{category?}', [IndustriesController::class, 'industries'])->name('web.industries');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::get('/certified', function () {
    return view('web.certs.ctpatCerts');
})->name('certified');

Route::get('/support', function () {
    return view('web.support');
})->name('web.support');

  // VER DETALLE
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

///////////////////////////////////login ///////////////////////////


Route::prefix('login/eds-dashboard')->group(function () {

    // mostrar login
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

    // procesar login
    Route::post('/', [LoginController::class, 'login'])->name('login.post');

    // logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

});
///////////////////////////////// Dashboard ////////////////////

Route::prefix('eds-dashboard')->middleware(['auth', 'user.active'])->group(function () {

    // Dashboard principal
    Route::get('/', function () {
        return view('app.main');
    })->name('dashboard.index');

    // -----------------------------
    // RUTAS CRUD PRODUCTOS
    // -----------------------------

    // LISTAR PRODUCTOS
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    // CREAR PRODUCTO
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');

    // EDITAR PRODUCTO
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');
//para activar o desactivar un producto sin eliminarlo
   Route::patch('/products/{product}/toggle-status', [ProductController::class, 'toggleStatus'])
     ->name('products.toggleStatus');



    // RUTAS DE USUARIOS
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');

});

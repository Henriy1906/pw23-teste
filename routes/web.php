<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// teste aulinha 25/05
// Route::get('/teste/{algo?}', function($algo = null) {
//     return "O teste funcionou - {$algo} :)";
// });

// Route::get('/teste-view/{param?}', function($param = null) {
//     return view('teste-view', [
//         'valor_da_controller' => $param,
//     ]);
// });

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos')->middleware('auth');

Route::post('/produtos', [ProdutosController::class, 'index']);

Route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');

Route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');

Route::get('/produtos/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');

Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');

Route::get('/produtos/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::delete('/produtos/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');

Route::prefix('/usuarios')->group(function () {
    Route::get('', [UsuariosController::class, 'index'])->name('usuarios');

    Route::get('view', [UsuariosController::class, 'view'])->name('usuarios.view');

    Route::get('add', [UsuariosController::class, 'add'])->name('usuarios.add');

    Route::post('add', [UsuariosController::class, 'add']);

    Route::get('edit', [UsuariosController::class, 'edit'])->name('usuarios.edit');

    Route::get('delete', [UsuariosController::class, 'delete'])->name('usuarios.delete');


});

Route::get('login', [UsuariosController::class, 'login'])->name('login');
Route::post('login', [UsuariosController::class, 'login'])->name('login');

Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');

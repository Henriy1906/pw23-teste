<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');

Route::post('/produtos', [ProdutosController::class, 'index']);

Route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');

Route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');

Route::get('/produtos/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');

Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');

Route::get('/produtos/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::delete('/produtos/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');

Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');

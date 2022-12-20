<?php

use App\Http\Controllers\Test;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

//exemplos de rotas que devemos usar

    Route::get('/', [TestController::class, 'HomeScreen']);

    Route::get('/view', [TestController::class, 'home']);

    Route::get('/login', [TestController::class, 'login']);

    Route::get('/register', [TestController::class, 'register']);

    //aqui são rotas especificas para ficheiro do admin de forma a conseguir manipular a base de dados 

    Route::get('/Admin/Insert/{user}', [AdminController::class, 'create']);
    Route::get('/Admin/Edit/{user}', [AdminController::class, 'edit']);
    Route::get('/Admin/Update/{user}', [AdminController::class, 'update']);
    Route::get('/Admin/Remove/{user}', [AdminController::class, 'destroy']);


?>









        

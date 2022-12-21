<?php

use App\Http\Controllers\Test;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;



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

    Route::get('/teste', [TestController::class, 'HomeScreen']);

  //    Route::get('/', [HomeController::class, 'index']);

  // estas rotas aqui para baixo não devemos ter de usar pois com o auth, irá fazer isto
  // ajustar é os ficheiros com html e css da pasta auth e novos ficheiros de views

   // Route::get('/view', [TestController::class, 'home']);

    Route::get('/loginteste', [TestController::class, 'login']);

   // Route::get('/login', [LoginController::class, 'login']);

    Route::get('/registerteste', [TestController::class, 'register']);

 //  Route::get('/register', [RegisterController::class, 'register']);


    //aqui são rotas especificas para ficheiro do admin de forma a conseguir manipular a base de dados 
/*

    Route::get('/Admin/Insert/{user}', [AdminController::class, 'create']);
    Route::get('/Admin/Edit/{user}', [AdminController::class, 'edit']);
    Route::get('/Admin/Update/{user}', [AdminController::class, 'update']);
    Route::get('/Admin/Remove/{user}', [AdminController::class, 'destroy']);

*/ 

    Auth::routes();
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
?>


   







        


<?php

use App\Http\Controllers\Test;
use App\Http\Controllers\AdminController;

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

//estas funções iniciais são apenas para estudo e teste


    Route::get('/', function () {
    // return view('welcome');
    print "Heelo World\n";
    });


    //teste de rota
    Route::get('/Test1', function () {
        // return view('welcome');
        print "Test1\n";
        });

    //teste 2
    Route::get('/baba', function () {
        // return view('welcome');
        print "baba\n";
        });
        
         //teste mas mais avançado
      //forma mais correta de aplicar   
 //   Route::get('/test_advanced', [Test::class, 'test_advanced']);
   
   // Route::get('/test_view', [Test::class, 'test_view']);


//exemplos de rotas que devemos usar

    Route::get('/view', [Test::class, 'home']);

    Route::get('/login', [Test::class, 'login']);

    Route::get('/register', [Test::class, 'register']);

    //aqui são rotas especificas para ficheiro do admin de forma a conseguir manipular a base de dados 

    Route::get('/Admin/Insert/{user}', [AdminController::class, 'create']);
    Route::get('/Admin/Edit/{user}', [AdminController::class, 'edit']);
    Route::get('/Admin/Update/{user}', [AdminController::class, 'update']);
    Route::get('/Admin/Remove/{user}', [AdminController::class, 'destroy']);


    //aqui ficamos com a rota para a home page depois de ser feito o log in do user
Route::get(
    '/Main',
    function () {
        return view('Main');
    }
);










        

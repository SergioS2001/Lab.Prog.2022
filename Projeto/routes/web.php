<?php
use App\Http\Controllers\Test;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers;
use Tests\TestCase;
use App\Http\Controllers\MailController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



  // Route::get('/', [HomeController::class, 'HomeScreen']);

  Route::get('/', [HomeController::class, 'index']);

//Route::resource('artigos', HomeController::class);

  
  Route::get('/artigos', [HomeController::class,'index'])->name('artigos.index');
  Route::get('/artigos/create', [HomeController::class,'create'])->name('artigos.create');
  Route::post('/artigos', [HomeController::class,'store'])->name('artigos.store');
  Route::get('/artigos/{artigos}', [HomeController::class,'show'])->name('artigos.show');
  Route::get('/artigos/{artigos}/edit', [HomeController::class,'edit'])->name('artigos.edit');
  Route::put('/artigos/{artigos}', [HomeController::class,'update'])->name('artigos.update');
  Route::delete('/artigos/{artigos}', [HomeController::class,'destroy'])->name('artigos.destroy');


//  Route::get('/', [MailController::class, 'sendMail']);

  //rota para ir para a main page do admin
  
//  Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin'); //com este middleware, ele verifica se o user é do tipo certo para entrar nesta pagina

  Auth::routes();

  Route::get('/home', [App\Http\Controllers\HomeController::class, 'homescreen'])->name('home');

  /*
  Route::prefix('admin')->group(function () {
  Route::get('dashboard', [App\HTTP\Controllers\Admin\DashboardController::class, 'index']);
});*/


?>



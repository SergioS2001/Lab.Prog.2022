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


   Route::get('/', [HomeController::class, 'HomeScreen']);

 // Route::get('/', [MailController::class, 'sendMail']);

  

  Auth::routes();



  //rota para ir para a main page do admin
  Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('type'); //com este middleware, ele verifica se o user é do tipo certo para entrar nesta pagina

  Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
  Route::get('dashboard', [DashboardController::class, 'index']);
});  

?>



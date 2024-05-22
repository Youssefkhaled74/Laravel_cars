<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController\CarController;
use App\Http\Controllers\DashController\DashController;
use App\Http\Controllers\DashController\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::group([
//     'middleware' => 'api',
//     'prefix' => 'auth'
// ], function ($router) {
//     Route::post('/login', [AuthController::class, 'login']);
//     Route::post('/register', [AuthController::class, 'register']);
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::post('/refresh', [AuthController::class, 'refresh']);
//     Route::get('/user-profile', [AuthController::class, 'userProfile']);    
// });
// Routuser
Route::get('show_users',[UserController::class,'show']);
Route::get('add_users',[UserController::class,'create']);
Route::post('store_users',[UserController::class,'store']);
Route::get('delete_users/{id}',[UserController::class,'destroy'])->name('delete_users');
// Routecars
Route::get('show_cars',[CarController::class,'show']);
Route::get('create_cars',[CarController::class ,'create']);
Route::post('store_cars',[CarController::class,'store']);
Route::get('delete_cars/{id}',[CarController::class,'destroy'])->name('delete_cars');

Route::get('/',function(){
return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

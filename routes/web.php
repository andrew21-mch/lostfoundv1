<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SchoolController;
use App\Models\Token;

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

//
if (App::environment('production')) {
    URL::forceScheme('https');
}
//views
Route::view('/', 'home');
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::view('/addItem', 'addItem');
Route::view('/found', 'found');
Route::view('/create/category', 'categorycreate');
Route::view('/create/school', 'schoolcreate');
Route::view('/dashboard', 'dashboard');
Route::view('/contact', 'contact');
Route::view('/updateAccount', 'updateAccount');
Route::view('/admin/addkey', 'addKey');

// Admin
Route::post('/admin/register', [AuthController::class, 'register']);
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/update', [AuthController::class, 'update']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/profile_view/{id}', [AuthController::class, 'viewaccount']);

//access tokens
Route::Post('/admin/addkey', [AuthController::class, 'addKey']);
Route::get('/admin/viewkeys', [AuthController::class, 'viewkeys']);

//Items
Route::get('/search', [ItemController::class, 'find']);
Route::get('/view/{id}', [ItemController::class, 'view']);
Route::get('/viewall', [ItemController::class, 'viewall']);
Route::post('/create/item', [ItemController::class, 'create']);
Route::get('/delete/{id}', [ItemController::class, 'delete']);

//Schools
route::view('schools', 'viewschools');
route::get('/findschool', [SchoolController::class, 'find']);
route::get('viewschools', [SchoolController::class, 'getSchools']);
route::post('/create/school', [SchoolController::class, 'create']);

//Category
Route::post('/create/category', [CategoryController::class, 'create']);
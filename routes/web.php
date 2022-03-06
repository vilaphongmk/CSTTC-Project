<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AboutAdminController;
use App\Http\Controllers\User\AboutUserController;

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

Route::get('/', function () {
    return view('welcome');
});

route::get('/index', [AboutAdminController::class, 'Index'])->name('admin.about.index');
route::get('/about', [AboutUserController::class, 'About'])->name('user.about.index');

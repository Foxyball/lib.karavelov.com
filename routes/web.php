<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AuthorController;
use App\Http\Controllers\Backend\PublisherController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth'])->group(function () {
    Route::get(
        '/',
        function () {
            return view('index');
        }
    );

    Route::get('/user/logout', [AdminController::class, 'logout'])->name('admin.logout');
});


// Authors Manage
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AuthorController::class)->group(function () {
        Route::get('/all/author', 'all_author')->name('all.author');
        Route::get('/add/author', 'add_author')->name('add.author');
        Route::post('/store/author', 'store_author')->name('store.author');
        Route::get('/edit/author/{id}', 'edit_author')->name('edit.author');
        Route::post('/update/author', 'update_author')->name('update.author');
        Route::get('/delete/author/{id}', 'delete_author')->name('delete.author');
    });
});


// Publishers Manage
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(PublisherController::class)->group(function () {
        Route::get('/all/publisher', 'all_publisher')->name('all.publisher');
        Route::get('/add/publisher', 'add_publisher')->name('add.publisher');
        Route::post('/store/publisher', 'store_publisher')->name('store.publisher');
        Route::get('/edit/publisher/{id}', 'edit_publisher')->name('edit.publisher');
        Route::post('/update/publisher', 'update_publisher')->name('update.publisher');
        Route::get('/delete/publisher/{id}', 'delete_publisher')->name('delete.publisher');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

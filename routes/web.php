<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AuthorController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\GenreController;
use App\Http\Controllers\Backend\OrdersController;
use App\Http\Controllers\Backend\PublisherController;
use App\Http\Controllers\Backend\UserController;
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
        Route::get('/search/author', 'search_author')->name('search.author');
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
        Route::get('/search/publisher', 'search_publisher')->name('search.publisher');
    });
});

// Genres Manage
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(GenreController::class)->group(function () {
        Route::get('/all/genre', 'all_genre')->name('all.genre');
        Route::get('/add/genre', 'add_genre')->name('add.genre');
        Route::post('/store/genre', 'store_genre')->name('store.genre');
        Route::get('/edit/genre/{id}', 'edit_genre')->name('edit.genre');
        Route::post('/update/genre', 'update_genre')->name('update.genre');
        Route::get('/delete/genre/{id}', 'delete_genre')->name('delete.genre');
        Route::get('/search/genre', 'search_genre')->name('search.genre');
    });
});

// Users Manage
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/all/user', 'all_user')->name('all.user');
        Route::get('/add/user', 'add_user')->name('add.user');
        Route::post('/store/user', 'store_user')->name('store.user');
        Route::get('/edit/user/{id}', 'edit_user')->name('edit.user');
        Route::post('/update/user/{id}', 'update_user')->name('update.user');
        Route::get('/delete/user/{id}', 'delete_user')->name('delete.user');
        Route::get('/search/user', 'search_user')->name('search.user');
        Route::get('/user/change/password/{id}', 'change_password')->name('change.password');
        Route::post('/user/update/password', 'update_password')->name('update.password');
    });
});

// Admin Change Password
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/change/password', 'admin_change_password')->name('admin.change_password');
        Route::post('/admin/update/password', 'admin_update_password')->name('admin.update_password');
    });
});


// Book Manage
Route::middleware(['auth'])->group(function () {
    Route::controller(BookController::class)->group(function () {
        Route::get('/all/book', 'all_book')->name('all.book');
        Route::get('/add/book', 'add_book')->name('add.book');
        Route::post('/store/book', 'store_book')->name('store.book');
        Route::get('/edit/book/{id}', 'edit_book')->name('edit.book');
        Route::post('/update/book', 'update_book')->name('update.book');
        Route::get('/delete/book/{id}', 'delete_book')->name('delete.book');
        Route::get('/search/book', 'search_book')->name('search.book');
    });
});

// Order Manage
Route::middleware(['auth'])->group(function () {
    Route::controller(OrdersController::class)->group(function () {
        Route::get('/all/order', 'all_order')->name('all.order');
        Route::get('/add/order', 'add_order')->name('add.order');
        Route::post('/store/order', 'store_order')->name('store.order');
        Route::get('/edit/order/{id}', 'edit_order')->name('edit.order');
        Route::post('/update/order', 'update_order')->name('update.order');
        Route::get('/delete/order/{id}', 'delete_order')->name('delete.order');
        Route::get('/search/order', 'search_order')->name('search.order');
        Route::get('/current/order', 'current_order')->name('current.order');
        Route::get('/details/order/{id}', 'order_details')->name('details.order');
    });
});


require __DIR__ . '/auth.php';

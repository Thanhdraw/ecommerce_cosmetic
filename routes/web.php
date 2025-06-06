<?php



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/tin-tuc')
    ->name('blog.')
    ->controller(App\Http\Controllers\PostController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });
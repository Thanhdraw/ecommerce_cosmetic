<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dang-lam-route', function () {
    return "dang hoc route";
});

Route::get('/list-users', function () {
    return [
        'users' => [
            'user-1' => 'thành nè',
            'user-2' => 'tú nè',
        ],
    ];
});

// Route::get('/user/{id}', function ($id) {
//     return "User ID: " . $id;
// })->where('id', '[0-9]+');

// Route::get('/user/{name}', function ($name) {
//     return "User Name: " . $name;
// })->where('name', '[A-Za-z]+');

// // Multiple constraints
// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return "User: $id - $name";
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::prefix('admin')->group(function () {
    Route::get('/contact', function () {
        return "url: admin/contact";
    });
    Route::get('/name/{name}', function ($name) {
        return "User name:" . $name;
    })->where('name', '[A-Za-z]+');
    Route::get('/user/{id}/{name}', function ($id, $name) {

        return "Users: $id - $name";
    })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
})->name('admin');


Route::middleware('check.age')->group(function () {
    Route::get('/movies/{age}', function ($age) {
        return 'Adult movies';
    });
    Route::get('/games', function () {
        return 'Adult games';
    });

});
Route::get('/secret', function () {
    return 'Secret content';
})->middleware(['check.age', 'auth']);
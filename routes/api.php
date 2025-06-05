<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json(['message' => 'Hello from Laravel 12 API']);
});

// 4. API route trả về danh sách 3 posts fake
Route::get('/post', function () {
    $post = [
        [
            'id' => 1,
            'name' => 'post-1',
        ],
        [
            'id' => 2,
            'name' => 'post-3',
        ],
        [
            'id' => 3,
            'name' => 'post-3',
        ],
    ];
    return response()->json($post);
});
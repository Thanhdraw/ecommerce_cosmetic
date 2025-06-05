<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 1. Route hiển thị user profile: /user/{id}
// 2. Route hiển thị post: /post/{slug} (chỉ chấp nhận chữ và dấu gạch ngang)
// 3. Route category với optional parameter: /category/{name?}
// 4. Route search: /search/{query}/{page?} (page mặc định = 1)

Route::prefix('/profile')->group(function () {

    // cau 1
    Route::get('user/{id}', function ($id) {
        return "User có id là: " . $id;
    });
    // câu 2
    Route::get('/post/{slug}', function ($slug) {
        return "Post có slug là " . $slug;
    })->where('slug', '[a-z-]+');
    // câu 3
    Route::get('/category/{name?}', function (?string $name = null) {
        return $name;
    });

    //cau 4
    Route::get('/search/{query}/{page}', function (string $query, $page = 1) {
        return "query là: " . $query . "page là: " . $page;
    })->where(['query' => '[A-z-]+', 'page' => '[0-9]+']);
});


// 1. Group "blog" với các routes:
//    - /blog (danh sách posts)
//    - /blog/create (tạo post mới)
//    - /blog/{id} (chi tiết post)
// 2. Tất cả routes trong group có name prefix "blog."
// 3. Tạo route /test để generate URLs cho các routes trên
$post = [
    [
        'id' => 1,
        'name' => 'danh sach cac bai post 1'
    ],
    [
        'id' => 2,
        'name' => 'danh sach cac bai post 2'
    ],
    [
        'id' => 3,
        'name' => 'danh sach cac bai post 3'
    ],
];

Route::prefix('blog')->group(function () use ($post) {

    Route::get('/', function () use ($post) {

        return response()->json($post);
    })->name('blog.index');
    Route::get('/create', function () {
        return "Tao bai viet moi";
    })->name('blog.create');
    Route::get('/{id?}', function ($id = null) use ($post) {

        foreach ($post as $item) {
            if ($item['id'] == $id) {
                return $item['name'];
            }
        }
        return $id ?? 'Không có ID';
        ;
    })->name('blog.show');



});
Route::get('/test', function () {
    $index = route('blog.index');
    $create = route('blog.create');
    $show = route('blog.show', ['id' => 2]);
    return response()->json([
        'index' => $index,
        'create' => $create,
        'show' => $show
    ]);
});


// 1. Tạo middleware LogRequest ghi log mỗi request
// 2. Apply cho tất cả routes trong group "admin"
// 3. Test bằng cách truy cập các URLs và check log

Route::prefix('admin')->middleware('check')->group(function () {
    Route::get('/dasboard', function () {
        return "Admin Dashboard";
    });
    Route::get('setting', function () {
        return 'Admin setting';
    });
});
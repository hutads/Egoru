<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/test', function () {
   return 'ne penis';
});
Route::group(['namespace' => 'Admin', 'prefix' =>'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/posts', '\App\Http\Controllers\Admin\Post\IndexController')->name('admin.post.index');
    });

});
Route::get('/admin/posts', \App\Http\Controllers\Post\IndexController::class)->middleware('admin')->name('admin.post.index');

Route::get ('/day','\App\Http\Controllers\DayController@index');

Route::get ('/shirt','\App\Http\Controllers\ShirtController@index')->name('shirt.index');
Route::get ('/shirt/create','\App\Http\Controllers\ShirtController@create')->name('shirt.create');
Route::post ('/shirt/create','\App\Http\Controllers\ShirtController@store')->name('shirt.store');

Route::get ('/mouse','\App\Http\Controllers\MouseController@index') ->name('mouse.index');
Route::get ('/mouse/create','\App\Http\Controllers\MouseController@create') ->name('mouse.create');
Route::post ('/mouse/create','\App\Http\Controllers\MouseController@store') ->name('mouse.store');
Route::get ('/mouse/{mouse}','\App\Http\Controllers\MouseController@show') ->name('mouse.show');
Route::get ('/mouse/{mouse}/edit','\App\Http\Controllers\MouseController@edit') ->name('mouse.edit');
Route::patch ('/mouse/{mouse}','\App\Http\Controllers\MouseController@update') ->name('mouse.update');
Route::delete ('/mouse/{mouse}','\App\Http\Controllers\MouseController@destroy') ->name('mouse.delete');

//Route::group(['namespace' => 'game'], function () {
//
//
// });

Route::get ('/game', '\App\Http\Controllers\Game\IndexController')->name('games.index');
Route::get ('/game/create', '\App\Http\Controllers\Game\CreateController')->name('games.create');
Route::post ('/game/create', '\App\Http\Controllers\Game\StoreController')->name('games.store');
Route::get ('/game/{game}', '\App\Http\Controllers\Game\ShowController')->name('games.show');
Route::get ('/game/{game}/edit', '\App\Http\Controllers\Game\EditController')->name('games.edit');
Route::patch ('/game/{game}', '\App\Http\Controllers\Game\UpdateController')->name('games.update');
Route::delete ('/game/{game}', '\App\Http\Controllers\Game\DeleteController')->name('games.delete');

Route::get ('/hobby', '\App\Http\Controllers\HobbyController@index');

Route::get ('/training', '\App\Http\Controllers\TrainingController@index')->name('training.index');
Route::get ('/training/create','\App\Http\Controllers\TrainingController@create')->name('training.create');
Route::post ('/training','\App\Http\Controllers\TrainingController@store')->name('training.store');
Route::get ('/training/{training}','\App\Http\Controllers\TrainingController@show')->name('training.show');
Route::get ('/training/{training}/edit','\App\Http\Controllers\TrainingController@edit')->name('training.edit');
Route::patch ('/training/{training}','\App\Http\Controllers\TrainingController@update')->name('training.update');
Route::delete('/training/{training}','\App\Http\Controllers\TrainingController@destroy')->name('training.delete');


Route::group(['namespace' => 'post'], function () {

    Route::get ('/posts','\App\Http\Controllers\Post\IndexController')->name('posts.index');
    Route::get ('/posts/create','\App\Http\Controllers\Post\CreateController')->name('post.create');
    Route::post ('/posts','\App\Http\Controllers\Post\StoreController')->name('post.store');
    Route::get ('/posts/{post}','\App\Http\Controllers\Post\ShowController')->name('post.show');
    Route::get ('/posts/{post}/edit','\App\Http\Controllers\Post\EditController')->name('post.edit');
    Route::patch ('/posts/{post}','\App\Http\Controllers\Post\UpdateController')->name('post.update');
    Route::delete('/posts/{post}','\App\Http\Controllers\Post\DeleteController')->name('post.delete');
});






Route::get ('/posts/update','\App\Http\Controllers\PostController@update');

Route::get ('/posts/delete','\App\Http\Controllers\PostController@delete');

Route::get ('/posts/first_or_create','\App\Http\Controllers\PostController@firstOrCreate');

Route::get ('/posts/update_or_create','\App\Http\Controllers\PostController@updateOrCreate');

Route::get ('/main','\App\Http\Controllers\MainController@index')->name('main.index');
Route::get ('/contacts','\App\Http\Controllers\ContactController@index')->name('contacts.index');
Route::get ('/about','\App\Http\Controllers\AboutController@index')->name('about.index');


Route::group(['namespace' => 'admin','prefix'=>'admin'], function () {
    Route::group(['namespace' => 'post'], function () {

        Route::get ('/post','\App\Http\Controllers\Admin\Post\IndexController')->name('admin.post.index');
    });

});
//
//Route::group(['namespace' => 'App\Http\Controllers\admin', 'prefix' => 'admin'], function () {
//    Route::group(['namespace' => 'Users'], function () {
//        Route::get('/users', '\App\Http\Controllers\admin\post\IndexController')->name('admin.users.index');
//    });
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

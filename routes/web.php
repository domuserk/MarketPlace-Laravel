<?php

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
    $name = "Ryan";

    return view('welcome', compact('name'));
})->name('home');

Route::get('/model', function(){
    //$products = \App\Product::all();
    //$user = new \App\User();
    //$user->name = 'Test';
    //$user->email = "test@gmail.com";
   // $user->password = bcrypt('12345');
   // $user->save();
    // $user = \App\User::find(4);
    // return $user->store;
    
  //  $user = \App\User::find(1);

   // $store = $user->store()->create ([
      // 'name' => 'Loja Test1',
       // 'description' => 'test1',
      // 'phone' =>'xx-xxxxx-xxxx',
       // 'mobile_phone' => 'xx-xxxxx-xxxx',
       // 'slug' => 'loja-test1',
   // ]);

    return \App\User::all();
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){
   
        // Route::prefix('stores')->name('stores.')->group(function(){
            // Route::get('/','StoreController@index')->name('index');
            // Route::get('/create','StoreController@create')->name('create');
            // Route::post('/store','StoreController@store')->name('store');
             //Route::get('/{store}/edit','StoreController@edit')->name('edit');
             //Route::post('/update/{store}','StoreController@update')->name('update');
            // Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
        // });
     
         Route::resource('stores', 'StoreController');
         Route::resource('products', 'ProductController');
         Route::resource('categories', 'CategoryController');
     });
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

<?php
Route::resource('products', 'ProductController');
// Route::resource('products', 'ProductController')->middleware('auth');
// Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
// Route::put('products/{id}', 'ProductController@update')->name('products.update');
// Route::get('products/{id}/edit', 'ProductController@create')->name('products.edit');
// Route::get('products/create', 'ProductController@create')->name('products.create');
// Route::get('products', 'ProductController@index')->name('product.index');
// Route::get('products/{id}', 'ProductController@show')->name('product.show');
// Route::post('products', 'ProductController@store')->name('product.store');

Route::get('/login', function () {
    return 'Login';
})->name('login');
/*
Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::namespace('Admin')->group(function () {

            Route::name('admin.')->group(function () {

                Route::get('/dasboard', 'TesteController@teste')->name('dasboard');

                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');

                Route::get('/produtos', 'TesteController@teste')->name('produtos');

                // Route::get('/', 'TesteController@teste')->name('admin.home');
                Route::get('/', function () {
                    return redirect()->route('admin.dasboard');
                })->name('home');
            });
        });
    });
});
*/
// Route::group([
//     'middleware' => [],
//     'prefix' => 'admin',
//     'namespace' => 'Admin'
// ], function () {

//     Route::get('/dasboard', 'TesteController@teste')->name('admin.dasboard');

//     Route::get('/financeiro', 'TesteController@teste')->name('admin.financeiro');

//     Route::get('/produtos', 'TesteController@teste')->name('admin.produtos');

//     // Route::get('/', 'TesteController@teste')->name('admin.home');
//     Route::get('/', function () {
//         return redirect()->route('admin.dasboard');
//     })->name('admin.home');
// });



// Route::get('/admin/dasboard', function () {
//     return "Home admin";
// })->middleware('auth');

// Route::get('/admin/financeiro', function () {
//     return "Financeiro admin";
// })->middleware('auth');

// Route::get('/admin/produtos', function () {
//     return "Produtos admin";
// })->middleware('auth');


// Route::get('/redirect3', function () {
//     return redirect()->route('url.name');
// });
// Route::get('/name-url', function () {
//     return 'hey hey hey';
// })->name('url.name');

// Route::view('/view', 'welcome');

// Route::redirect('/redirect1', '/redirect2');
// Route::get('/redirect1',function(){
//    return redirect('/redirect2');
// });
// Route::get('/redirect2', function () {
//     return "redirect2";
// });
// Route::get('/produtos/{idProduct?}', function ($idProduct = '') {
//     return "Produto(s) {$idProduct}";
// });
// Route::get('/categoria/{flag}/posts', function ($flag) {
//     return "Posts da Categoria: {$flag}";
// });
// Route::get('/categorias/{flag}', function ($flag) {
//     return "Produtos da Categoria: {$flag}";
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/contato', function () {
//     return view('site.contact');
// });


// Route::any('/any', function ($id) {
//     return 'Any';
// });

// Route::match(['get', 'post'], '/match', function () {
//     return 'match';
// });;

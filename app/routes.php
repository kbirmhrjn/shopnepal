<?php
use Shop\Images\Image;
use Shop\Products\Product;

Route::get('/',['as'=>'home', 'uses' => 'HomeController@index']);
Route::get("/single", function ()
{
    $image = Image::create([
        'type' => 'gallery',
        'url' =>  'http://placehold.it/350x150',
        'name' => 'faker'
    ]);
    $product = Product::create(['title' => 'title','description'=>'desc']);
    $product->images()->save($image);
    return $product->images;
});

Route::group([
          'domain' => 'admin.'.Config::get('app.url'),
          'namespace'=>'Controllers\Admin',
            'before' => 'auth.admin'
        ],function(){
   Route::get('product',['as'=>'product.single', 'uses' => 'ProductsController@show']);
});
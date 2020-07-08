<?php

use App\Models\Category;

Route::get('/', function() {
    return "halo";
});
Route::resource('categories', 'Categories\CategoryController');
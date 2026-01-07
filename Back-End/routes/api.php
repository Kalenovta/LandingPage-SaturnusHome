<?php

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/wifi-packages', function () {
    return product::all();
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProduitController;

Route::resource('produit', ProduitController::class);

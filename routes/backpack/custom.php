<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('tenant', 'TenantCrudController');
    Route::crud('safra', 'SafraCrudController');
    Route::crud('cultura', 'CulturaCrudController');
    Route::crud('variedadecultura', 'VariedadeCulturaCrudController');
    Route::crud('proprietario', 'ProprietarioCrudController');
    
    Route::crud('produtor', 'ProdutorCrudController');
    Route::crud('fazenda', 'FazendaCrudController');
}); // this should be the absolute last line of this file
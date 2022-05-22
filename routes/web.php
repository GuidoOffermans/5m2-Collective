<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', fn() => view( 'home' ) )->name( 'home' );
Route::get( 'about', fn() => view( 'about' ) )->name( 'about' );
Route::get( 'atelier-spaces', fn() => view( 'atelier-spaces' ) )->name( 'atelier-spaces' );
Route::get( 'stammtisch', fn() => view( 'stammtisch' ) )->name( 'stammtisch' );
Route::get( 'events', fn() => view( 'events' ) )->name( 'events' );
Route::get( 'collective', fn() => view( 'collective' ) )->name( 'collective' );
Route::get( 'kontakt', fn() => view( 'kontakt' ) )->name( 'kontakt' );

Route::middleware( [ 'auth' ] )
    ->prefix( 'admin' )
    ->group( function () {
        Route::get( '/', fn() => view( 'admin.dashboard' ) );

        Route::get( '/ateliers', fn() => view( 'admin.ateliers' ) );
        Route::get( '/ateliers/add', fn() => view( 'admin.add-atelier' ) );

        Route::get( '/collective', fn() => view( 'admin.dashboard' ) );
    } );

require __DIR__ . '/auth.php';

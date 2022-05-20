<?php

use Illuminate\Support\Facades\Route;

Route::get( '/', fn() => view( 'home' ) )->name( 'home' );
Route::get( 'about', fn() => view( 'about' ) )->name( 'about' );
Route::get( 'atelier-spaces', fn() => view( 'atelier-spaces' ) )->name( 'atelier-spaces' );
Route::get( 'stammtisch', fn() => view( 'stammtisch' ) )->name( 'stammtisch' );
Route::get( 'events', fn() => view( 'events' ) )->name( 'events' );
Route::get( 'portraits', fn() => view( 'portraits' ) )->name( 'portraits' );
Route::get( 'kontakt', fn() => view( 'kontakt' ) )->name( 'kontakt' );

Route::get( '/dashboard', function () {
    return view( 'dashboard' );
} )->middleware( [ 'auth' ] )->name( 'dashboard' );

require __DIR__ . '/auth.php';

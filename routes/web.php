<?php


use App\Http\Controllers\AdminAtelierController;
use App\Http\Controllers\AtelierController;
use Illuminate\Support\Facades\Route;

Route::get( '/', fn() => view( 'home' ) )->name( 'home' );
Route::get( 'about', fn() => view( 'about' ) )->name( 'about' );
Route::get( 'find-a-studio', [ AtelierController::class, 'index' ] )->name( 'find-a-studio' );
Route::get( 'share-a-studio', fn() => view( 'share-a-studio' ) )->name( 'share-a-studio' );
Route::get( 'studio/{atelier}/sign-up', [ AtelierController::class, 'signUp' ])->name( 'studio-sign-up' );
Route::get( 'studio/{atelier}', [ AtelierController::class, 'show' ] )->name( 'atelier' );
Route::get( 'stammtisch', fn() => view( 'stammtisch' ) )->name( 'stammtisch' );
Route::get( 'projects', fn() => view( 'projects' ) )->name( 'projects' );
Route::get( 'collective', fn() => view( 'collective' ) )->name( 'collective' );
Route::get( 'contact', fn() => view( 'contact' ) )->name( 'contact' );

Route::middleware( [ 'auth' ] )
    ->prefix( 'admin' )
    ->group( function () {
        Route::get( '/', fn() => redirect( 'admin/ateliers' ) );

        Route::get( '/ateliers', [ AdminAtelierController::class, 'index' ] )->name( 'admin-ateliers' );

        Route::post( '/ateliers/create', [ AdminAtelierController::class, 'store' ] );
        Route::get( '/ateliers/add', fn() => view( 'admin.add-atelier' ) );

        Route::get( '/collective', fn() => view( 'admin.collective' ) )->name( 'admin-collective' );
        Route::get( '/stammtisch', fn() => view( 'admin.dashboard' ) )->name( 'admin-stammtisch' );
        Route::get( '/events', fn() => view( 'admin.dashboard' ) )->name( 'admin-events' );
    } );

require __DIR__ . '/auth.php';

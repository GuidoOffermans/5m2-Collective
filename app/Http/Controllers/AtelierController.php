<?php

namespace App\Http\Controllers;

use App\Models\Atelier;
use Illuminate\View\View;

class AtelierController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View {
        return view( 'find-a-studio', [ 'ateliers' => Atelier::all() ] );
    }

    /**
     * Display the specified resource.
     *
     * @param Atelier $atelier
     * @return View
     */
    public function show( Atelier $atelier ): view {
        return view( 'studio', [ 'atelier' => $atelier ] );
    }

    /**
     * Display the specified resource.
     *
     * @param Atelier $atelier
     * @return View
     */
    public function signUp( Atelier $atelier ): view {
        return view( 'studio-sign-up', [ 'atelier' => $atelier ] );
    }
}

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
        return view( 'atelier-spaces', [ 'ateliers' => Atelier::all() ] );
    }
}

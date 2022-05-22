<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAtelierRequest;
use App\Http\Requests\UpdateAtelierRequest;
use App\Models\Atelier;
use Illuminate\View\View;

class AdminAtelierController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View {
        return view( 'admin.ateliers', [ 'ateliers' => Atelier::all() ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return 'hi';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreAtelierRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store( StoreAtelierRequest $request ) {
        Atelier::create( [
            'name' => $request->atelierName,
            'address' => $request->address,
            'city' => $request->city,
            'postalCode' => $request->postalCode,
        ] );

        return redirect('/admin/ateliers');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Atelier $atelier
     * @return \Illuminate\Http\Response
     */
    public function show( Atelier $atelier ) {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Atelier $atelier
     * @return \Illuminate\Http\Response
     */
    public function edit( Atelier $atelier ) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateAtelierRequest $request
     * @param \App\Models\Atelier $atelier
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateAtelierRequest $request, Atelier $atelier ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Atelier $atelier
     * @return \Illuminate\Http\Response
     */
    public function destroy( Atelier $atelier ) {
        //
    }
}

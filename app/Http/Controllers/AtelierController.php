<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShareStudioRequest;
use App\Http\Requests\SignUpForStudioRequest;
use App\Mail\ShareAStudio;
use App\Mail\SignedUpForStudio;
use App\Models\Atelier;
use Illuminate\Support\Facades\Mail;
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

    /**
     * Display the specified resource.
     *
     */
    public function userSignUp( SignUpForStudioRequest $request, $id ) {
        Mail::to( 'guidooffermans86@gmail.com' )->send(
            new SignedUpForStudio(
                $request->input( 'studio-name' ),
                $request->input( 'name' ),
                $request->input( 'email' ),
                $request->input( 'phone' ),
                $request->input( 'language' ),
                $request->input( 'skills' ),
                $request->input( 'dates' ),
                $request->input( 'comments' ),
            )
        );

        return redirect()->route( 'studio-sign-up', $id )->with( [ 'filledForm' => true ] );
    }

    /**
     * Display the specified resource.
     * @return View
     */
    public function shareView(): view {
        return view( 'share-a-studio' );
    }

    public function shareStudioSignUp( ShareStudioRequest $request ) {
        Mail::to( 'guidooffermans86@gmail.com' )->send(
            new ShareAStudio(
                $request->input( 'name' ),
                $request->input( 'email' ),
                $request->input( 'phone' ) ? $request->input( 'phone' ) : '',
                $request->input( 'studio-name' ),
                $request->input( 'studio-address' ),
                $request->input( 'studio-about' ),
                $request->input( 'studio-extra' ),
                $request->input( 'studio-key' ),
                $request->input( 'contact-name' ),
                $request->input( 'contact-email' ),
                $request->input( 'contact-phone' ) ? $request->input( 'contact-phone' ) : '',
            )
        );

        return redirect()->route( 'share-a-studio' )->with( [ 'filledForm' => true ] );
    }
}

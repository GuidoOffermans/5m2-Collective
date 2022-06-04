@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 relative mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1>{{$atelier->name}}</h1>
            <p>
                Information to the individual studio spaces.
                Description (Infrastructure, social structure, shared studio, how many people etc.)
                Coordinates, 1 picture,
            </p>
        </article>

        <x-heart-icon class="my-6"/>

        <image class="w-96" src="{{url('/images/atelier.jpeg')}}"/>


        <h1 class="mt-8"></h1>
        <a href="{{route('studio-sign-up', $atelier->id )}}">
            <button
                type="button"
                class="items-center border border-gray-300 shadow-sm text-xl
                    font-medium rounded text-gray-700 bg-[#EDEDED] hover:bg-blue-50
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 w-44 h-10 self-center"
            >
                Sign Up
            </button>
        </a>
    </section>

    <div class="my-24"></div>
    <div class="my-6"></div>

@endsection

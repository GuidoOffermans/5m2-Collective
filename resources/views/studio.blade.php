@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 relative mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">{{$atelier->name}}</h1>
            <p class="font-Helvetica font-light leading-6">
                Information to the individual studio spaces.
                <br>
                Description (Infrastructure, social structure, shared studio, how many people etc.)
            </p>
        </article>

        <x-heart-icon class="my-10"/>

        <image class="w-2/3" src="{{url('/images/studios/atelier.jpeg')}}"/>

        <div class="my-10"></div>

        <h2 class="font-Ogg font-bold text-4xl">Available Slots:</h2>

        <div class="my-2"></div>

        <iframe
            class="w-full"
            src="https://calendar.google.com/calendar/embed?src=db7vpc6g8glnec5cp02am40omc%40group.calendar.google.com&ctz=Europe%2FZurich"
            style="border: 0" width="800" height="600" frameborder="0" scrolling="no">
        </iframe>

        <div class="my-2 lg:my-6"></div>

        <h1 class="mt-8"></h1>
        <a href="{{route('studio-sign-up', $atelier->id )}}">
            <x-general-button>
                Sign Up
            </x-general-button>
        </a>
    </section>

    <div class="my-24"></div>
    <div class="my-6"></div>

@endsection

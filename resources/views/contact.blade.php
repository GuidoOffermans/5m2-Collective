@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1>Kontakt</h1>
            <p>Email: 5m2collective@gmail.com</p>
        </article>

        <x-heart-icon class="my-6"/>

        <article class="prose prose-md lg:prose-xl">
            <h2>Join the Conversation!</h2>
            <button
                type="button"
                class="items-center border border-gray-300 shadow-sm text-xl
                    font-medium text-gray-700 bg-[#EDEDED] hover:bg-blue-50
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 w-44 h-10 self-center"
            >
                Etherpad
            </button>
        </article>

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h2>Instagram!</h2>
            <a href="https://instagram.com/5m2collective">
                <img src="{{url('/images/instagram.png')}}" alt="instagram link" class="h-16 mx-auto"/>
            </a>
        </article>

        <div class="my-32"></div>
    </section>
@endsection

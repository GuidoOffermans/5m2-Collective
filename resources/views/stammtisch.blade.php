@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center items-center w-5/6 mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">Stammtisch</h1>
            <p class="font-Helvetica font-light leading-6">
                We believe there is power in collectivity. That is why there will be a monthly round table. There, ideas
                can be shared, projects pitched, and concepts of space discussed. This get-together functions as a tool
                to strengthen our network and connect people.
            </p>
            <p class="font-Helvetica font-light  leading-6">
                If the 5m2 Collective has sparked your interest but you aren’t quite sure how to participate, join us
                for the next round table:
            </p>
        </article>

        <x-heart-icon class="my-6"/>
    </section>

    <div class="my-6"></div>

    <section class="flex flex-col justify-center content-center justify-items-center items-center mb-16 w-5/6 mx-auto">
        <h2 class="text-5xl mb-4 font-Ogg font-bold">Next Stammtisch:</h2>
        <ul
            role="list"
            class="flex flex-col scroll-smooth overflow-y-auto divide-y divide-gray-400 border-y border-gray-300 w-full"
        >
            @for ($i = 0; $i < 1; $i++)
                <li class="py-10 flex flex-col justify-between space-y-4">
                    <div class="flex justify-center rounded-full self-center">
                        <img class="rounded-full w-96 h-96 self-center m-0"
                             src="{{url('/images/stammtisch.png')}}"
                             alt="">
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center">
                        <h4 class="text-3xl text-black font-Ogg font-bold my-4">June 20th 18:00</h4>
                        <h3 class="text-5xl text-black font-Ogg font-bold italic my-3">Viaduktraum Toni-Areal</h3>
                        <p class="text-3xl text-black font-Helvetica font-light italic mt-4">
                            Pfingstweidstrasse 96<br>
                            8005 Zürich
                        </p>
                    </div>
                </li>
            @endfor
        </ul>
    </section>

    <section class="flex flex-col justify-center items-center mx-auto">
        <h2 class="text-5xl text-black font-Ogg font-bold mb-8">Want to join?</h2>
        <button
            type="button"
            class="items-center font-Ogg italic border border-[#E8E8E8] shadow-sm text-xl
                    font-medium text-black bg-[#EDEDED] hover:bg-blue-50
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 w-56 h-16 self-center"
        >
            Write us!
        </button>
    </section>

    <div class="self-center my-12"></div>

@endsection

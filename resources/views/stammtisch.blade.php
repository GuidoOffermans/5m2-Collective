@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center items-center w-5/6 mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1>Stammtisch</h1>
            <p>
                We believe there is power in collectivity. That is why there will be a monthly round table. There, ideas
                can be shared, projects pitched and concepts of space discussed. This get together functions as a tool
                to strengthen our network and connect people.
            </p>
            <p>
                If the 5m2 Collective has sparked your interest but your aren’t quite sure in what way to partake, join
                us for the next round table.
            </p>
        </article>

        <x-heart-icon class="my-6"/>
    </section>

    <section class="flex flex-col justify-center content-center justify-items-center items-center mb-16 w-5/6 mx-auto">
        <h2 class="text-5xl mb-4">Next Stammtisch:</h2>
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
                        <h3 class="font-medium text-5xl text-gray-900">Zentralwäscherei</h3>
                        <p class="text-lg text-gray-500 m-0">Strasse 33</p>
                        <p class="text-lg text-gray-500 m-0">8005 Zürich</p>
                    </div>
                </li>
            @endfor
        </ul>
    </section>

    <section class="flex flex-col justify-center items-center mx-auto">
        <h2 class="text-5xl mb-8">Want to join?</h2>
        <button
            type="button"
            class="items-center border border-gray-300 shadow-sm text-xl
                    font-medium rounded text-gray-700 bg-[#EDEDED] hover:bg-blue-50
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 w-44 h-10 self-center"
        >
            Write us!!
        </button>
    </section>

    <div class="self-center my-12"></div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="flex flex-col text-center ">

        <div class="self-center my-6"></div>

        <article class="prose self-center">
            <h1>Stammtisch</h1>
            <p>
                As a reaction to the current global crises, 5m2 forms an
                accessible, collective workspace and wandering
                studio for creative people with different cultural backgrounds and precarious life circumstances.
                As a reactioople with different cultural backgrounds and precarious life circumstances.
                As a reaction to the current global crises, 5m2 forms an
                accessible, collective workspace and wandering
                studio for creative people with different cultural background.
            </p>
        </article>

        <x-heart-icon class="self-center my-6"/>

        <section class="self-center mb-16 w-3/4">
            <h2 class="mb-4">
                Hier siehst du, wann und wo wir uns das nächste Mal treffen:
            </h2>
            <ul
                role="list"
                class="flex flex-col scroll-smooth overflow-y-auto divide-y divide-gray-400 border-y border-gray-300 h-96"
            >
                @for ($i = 0; $i < 1; $i++)

                    <li class="py-4 flex flex-col justify-between h-32">
                        <div class="flex justify-center rounded-full self-center">
                            <img class="rounded-full w-52 h-52 self-center m-0"
                                 src="https://images.unsplash.com/photo-1601397210737-a5534480bdc5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740"
                                 alt="">
                        </div>
                        <div class="">
                            <p class="text-sm font-medium text-gray-900 mt-4 mb-0">4. Juni 2022</p>
                            <h3 class="font-medium text-gray-900 m-0">Zentralwäscherei</h3>
                            <p class="text-m text-gray-500 m-0">Strasse 33</p>
                            <p class="text-m text-gray-500 m-0">8005 Zürich</p>
                        </div>
                    </li>
                @endfor
            </ul>
        </section>

        <section class="flex flex-col justify-center">
            <h2 class="mb-4">Willst du dabei sein?</h2>
            <button type="button"
                    class="items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs
                    font-medium rounded text-gray-700 bg-gray-100 hover:bg-gray-50
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 w-32 self-center">
                Schreib uns!
            </button>
        </section>

        <div class="self-center my-12"></div>

    </div>
@endsection

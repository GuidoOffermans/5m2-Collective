@extends('layouts.app')

@section('content')
    <div class="flex flex-col text-center place-content-center">

        <div class="self-center my-6"></div>

        <article class="prose self-center">
            <h1>Events</h1>
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

        <section class=" bg-white self-center mb-16 w-3/4">
            <div class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-12">
                <div class="space-y-12">
                    <ul role="list"
                        class="mx-auto space-y-16 sm:grid grid-cols-1 sm:gap-0 sm:space-y-0 lg:max-w-5xl divide-y divide-gray-400 border-y border-gray-400">

                        @for ($i = 0; $i < 3; $i++)
                            <li>
                                <div class="flex space-x-4 justify-center justify-items-center content-center my-4">
                                    <img class="h-40 w-40 rounded-full xl:w-56 xl:h-56 my-auto"
                                         src="https://images.unsplash.com/photo-1601397210737-a5534480bdc5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670"
                                         alt="">
                                    <div class="flex flex-col text-left text-lg leading-6 font-medium m-0  space-y-4 ">
                                        <p class="text-sm font-medium text-gray-900 mb-0">4. Juni 2022</p>
                                        <div>
                                            <h3 class="font-medium text-gray-900 m-0 text-3xl">Rhizom</h3>
                                            <p class="text-m text-gray-500 m-0">
                                                As a reaction to the current global crises, 5m2 forms an
                                                accessible, collective workspace and wandering
                                                studio for creative people with different cultural backgrounds and
                                                precarious life circumstances.
                                                As a reactioople with different cultural backgrounds and precarious
                                                life circumstances.
                                                As a bdfvfdactioople with different cultural backgrounds and
                                                precarious life circumstances.
                                            </p>
                                        </div>
                                        <p class="text-m text-gray-500 m-0">By 5m2 Collective</p>

                                    </div>
                                </div>
                            </li>
                        @endfor

                    </ul>
                </div>
            </div>
        </section>

        <div class="self-center my-6"></div>

    </div>
@endsection


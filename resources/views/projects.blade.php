@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 mx-auto">

        <div class="self-center my-6"></div>

        <article class="prose prose-md lg:prose-xl self-center">
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

    </section>

    <section class=" bg-white self-center mb-16 w-5/6 mx-auto">
        <div class="mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-12">
            <div class="space-y-12">
                <ul role="list"
                    class="mx-auto space-y-16 sm:grid grid-cols-1 sm:gap-0 sm:space-y-0 divide-y divide-gray-400 border-y border-gray-400">

                    @for ($i = 0; $i < 3; $i++)
                        <li>
                            <div
                                class="flex flex-col md:flex-row space-x-4 justify-center justify-items-center content-center space-x-12 md:mx-10 mt-10 mb-10">
                                <img
                                    class="h-44 w-44 rounded-full md:w-80 md:h-80 my-auto self-center hidden lg:inline-flex"
                                    src="{{url('/images/Rhizom.png')}}"
                                    alt="">
                                <div class="flex flex-col text-left text-lg leading-6 font-medium ml-20 space-y-4">
                                    <p class="text-xl font-medium text-gray-900 mb-0">4. Juni 2022</p>
                                    <div>
                                        <h3 class="font-medium text-gray-900 mb-3 text-5xl">Rhizom</h3>
                                        <p class="text-xl text-gray-500 m-0">
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
                                    <div
                                        class="flex justify-items-start content-center items-end justify-self-end h-full">
                                        <x-heart-icon class="h-9 w-9 bg-[#E3F5FF] rounded-full"></x-heart-icon>
                                        <p class="text-xl font-medium text-gray-500 ml-4">By 5m2 Collective</p>
                                    </div>

                                </div>
                            </div>
                        </li>
                    @endfor

                </ul>
            </div>
        </div>
    </section>

    <div class="self-center my-6"></div>

@endsection


@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1>Collective</h1>
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

        <x-heart-icon class="my-6"/>
    </section>

    <div class="my-6"></div>

    <section class="px-24">
        <ul role="list"
            class="grid grid-cols-1 gap-1 gap-y-8 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mb-20 border-t py-8">

            @for ($i = 0; $i < 6; $i++)
                <li class="col-span-1 flex flex-col text-center bg-white border-b">
                    <div class="flex-1 flex flex-col p-1 pb-8">
                        <img
                            class="w-64 h-64 flex-shrink-0 mx-auto rounded-full"
                            src="https://i.pravatar.cc/30{{$i}}0"
                            alt=""
                        >
                        <p class="text-sm mt-5 bold">Dabei seit 2022</p>
                        <h3 class="mt-2 text-5xl text-gray-900">Lucy Fabian</h3>
                        <p class="text-lg mt-3">(She/Her) Creator/XY</p>
                        <p class="text-lg">Schweiz</p>
                    </div>
                </li>
            @endfor
        </ul>
    </section>
@endsection

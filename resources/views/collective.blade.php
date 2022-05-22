@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center">

        <div class="self-center my-6"></div>

        <article class="prose self-center">
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

        <x-heart-icon class="self-center my-6"/>
    </section>

    <div class="self-center my-6"></div>

    <section class="px-24">
        <ul role="list" class="grid grid-cols-1 gap-1 gap-y-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mb-20 border-t py-8">

            @for ($i = 0; $i < 12; $i++)
                <li class="col-span-1 flex flex-col text-center bg-white border-b">
                    <div class="flex-1 flex flex-col p-1 pb-8">
                        <img
                            class="w-32 h-32 flex-shrink-0 mx-auto rounded-full"
                            src="https://i.pravatar.cc/30{{$i}}0"
                            alt=""
                        >
                        <p class="text-sm mt-3"><b>Dabei seit 2022</b></p>
                        <h3 class="mt-2 text-gray-900">Lucy Fabian</h3>
                        <p>(She/Her) Creator/XY</p>
                        <p>Schweiz</p>
                    </div>
                </li>
            @endfor
        </ul>
    </section>
@endsection

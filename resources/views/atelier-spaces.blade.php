@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center">

        <div class="self-center my-6"></div>

        <article class="prose self-center">
            <h1>Search for an Atelier</h1>
            <p>
                As a reaction to the current global crises, 5m2 forms an
                accessible, collective workspace and wandering
                studio for creative people with different cultural backgrounds and precarious life circumstances.
            </p>
        </article>

        <x-heart-icon class="self-center my-6"/>
    </section>

    @php
        $ateliers = [
			(object)[
				'name' => 'Atelier Binz 39',
				'street' => 'Dienerstrasse 40',
				'postalcode' => '8004 Zürich',
				],
				(object)[
				'name' => 'Atelier x',
				'street' => 'Xstrasse 20',
				'postalcode' => '8013 Zürich',
				],
				(object)[
				'name' => 'Atelier y 19',
				'street' => 'Ystrasse 40',
				'postalcode' => '8009 Zürich',
				]
];
    @endphp

    <section class="flex max-w-7xl mx-auto sm:px-6 lg:px-8 h-96">

        <div class="bg-white overflow-y-auto scroll-smooth sm:rounded-md w-1/3 border-y border-gray-200">
            <ul role="list" class="divide-y divide-gray-200">

                @foreach ($ateliers as $atelier)
                    <li class="px-4 py-4 sm:px-6">
                        <div class="sm:flex">
                            <div class="flex flex-col justify-center">
                                <p class="text-sm font-medium text-gray-900">Atelier</p>
                                <h3 class="font-medium text-gray-900">{{$atelier->name}}</h3>
                                <p class="text-sm text-gray-500">{{$atelier->street}}</p>
                                <p class="text-sm text-gray-500">{{$atelier->postalcode}}</p>
                            </div>
                            <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4 ml-auto">
                                <img
                                    class="rounded-full h-24 w-full sm:w-24 border border-gray-300 bg-white text-gray-300"
                                    src="https://images.unsplash.com/photo-1601397210737-a5534480bdc5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740"
                                    alt="">
                            </div>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>

        <img src="{{ asset('images/map.png') }}" alt="map" class="bg-indigo-50 w-2/3 flex-auto">
    </section>

    <div class="self-center my-24"></div>
    <div class="self-center my-6"></div>

@endsection

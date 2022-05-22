@extends('layouts.admin')

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
            ],
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
            ],
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

@section('secondary-content')
    <section class="flex flex-col ">
        <div class="pl-4 pb-5 border-b border-gray-200">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Ateliers</h3>
        </div>
        <div class="bg-white overflow-y-auto scroll-smooth sm:rounded-md border-y border-gray-200 w-full">
            <ul role="list" class="divide-y divide-gray-200">

                @foreach ($ateliers as $atelier)
                    <li class=" py-4 sm:px-6">
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
                            <button type="button"
                                    class="h-8 my-auto inline-flex items-center px-2.5 py-1.5 border border-gray-300 shadow-sm text-xs
                                    font-medium rounded text-black bg-red-400 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                Delete
                            </button>

                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </section>
@endsection

@section('primary-content')
    <section>
        <div class="md:flex md:items-center md:justify-between border-b my-4">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Ateliers Spaces</h2>
            </div>
        </div>


        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="pr-8 mt-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Ateliers</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all the ateliers.</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <a href="/admin/ateliers/add">
                        <button type="button"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                            Add atelier
                        </button>
                    </a>
                </div>
            </div>
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                        Name
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Adres
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Email
                                    </th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">

                                @foreach ($ateliers as $atelier)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                            {{$atelier->name}}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            {{$atelier->street}},
                                            {{$atelier->postalcode}}
                                        </td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                            email@email.com
                                        </td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span
                                                    class="sr-only">, Lindsay Walton</span></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection

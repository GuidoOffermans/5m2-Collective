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

    @php
        $tables = [
            (object)[
				'image' => '/images/icons/big-heart.svg',
				'date' => 'June 20th 18:00',
				'title' => 'Viaduktraum Toni-Areal',
				'street' => 'Pfingstweidstrasse 96',
				'postal' => '8005 Zürich',
           ],
        ];
    @endphp

    <section class="flex flex-col justify-center content-center justify-items-center items-center mb-16 w-5/6 mx-auto">
        <h2 class="text-5xl mb-4 font-Ogg font-bold">Next Stammtisch:</h2>
        <ul
            role="list"
            class="flex flex-col scroll-smooth overflow-y-auto divide-y divide-gray-400 border-y border-gray-300 w-full"
        >
            @foreach ($tables as $table)
                <li class="py-10 flex flex-col justify-between space-y-4">
                    <div class="flex justify-center rounded-full self-center border border-[#4FBCEC]">
                        <img class="rounded-full w-80 h-80 md:w-96 md:h-96 self-center m-0"
                             src="{{url($table->image)}}"
                             alt="{{$table->title}} . image">
                    </div>
                    <div class="flex flex-col justify-center justify-items-center items-center">
                        <h4 class="text-3xl text-black font-Ogg font-bold my-4">{{$table->date}}</h4>
                        <h3 class="text-5xl text-black font-Ogg font-bold italic my-3">{{$table->title}}</h3>
                        <p class="text-3xl text-black font-Helvetica font-light italic mt-4">
                            {{$table->street}}<br>
                            {{$table->postal}}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="flex flex-col justify-center items-center mx-auto">
        <h2 class="text-5xl text-black font-Ogg font-bold mb-8">Want to join?</h2>

        <a href = "mailto:5m2collective@gmail.com?subject=Stammtisch">
            <button
                type="button"
                class="items-center font-Ogg italic border border-[#E8E8E8] shadow-sm text-xl
                    font-medium text-black bg-[#EDEDED] hover:bg-blue-50
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 w-56 h-16 self-center"
            >
                Write us!
            </button>
        </a>

    </section>

    <div class="self-center my-12"></div>

@endsection

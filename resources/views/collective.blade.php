@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">Collective</h1>
        </article>

        <x-heart-icon class="my-6"/>
    </section>

    <div class="my-6"></div>

    @php
        $persons = [
            (object)[
				'image' => '/images/collective/lucy.jpeg',
				'joinedDate' => 'Joined 2022',
				'name' => 'Lucy Fabian',
				'pronouns' => '(She/Her)',
				'role' => 'Creator/Designer',
				'country' => 'Switzerland'
    ],
             (object)[
				'image' => '/images/collective/nicole.jpeg',
				'joinedDate' => 'Joined 2022',
				'name' => 'Nicole Hirschi',
				'pronouns' => '(She/Her)',
				'role' => 'Creator/Designer',
				'country' => 'Switzerland'
    ],
             (object)[
				'image' => '/images/collective/mariia.jpeg',
				'joinedDate' => 'Joined 2022',
				'name' => 'Mariia Larina',
				'pronouns' => '(She/Her)',
				'role' => 'Graphic Designer',
				'country' => 'Ukraine'
    ],
            (object)[
				'image' => '/images/collective/ira.png',
				'joinedDate' => 'Joined 2022',
				'name' => 'Ira Evora',
				'pronouns' => '(She/Her)',
				'role' => 'Floral Designer',
				'country' => 'Ukraine'
    ],
            (object)[
				'image' => '',
				'joinedDate' => 'Joined 2022',
				'name' => 'Gökhan Avci',
				'pronouns' => '(He/Him)',
				'role' => '--',
				'country' => 'Switzerland'
    ],

];
    @endphp

    <section class="lg:px-24">
        <ul role="list"
            class="grid grid-cols-1 gap-1 gap-y-8 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 mb-20 border-t py-8">

            @foreach ($persons as $person)
                <li class="col-span-1 flex flex-col text-center bg-white border-b">
                    <div class="flex-1 flex flex-col p-1 pb-8">
                        @if ($person->image)
                            <img
                                class="w-48 h-48 md:w-64 md:h-64 flex-shrink-0 mx-auto rounded-full"
                                src="{{url( $person->image )}}"
                                alt=""
                            >
                        @else
                            <div class="w-48 h-48 md:w-64 md:h-64 flex-shrink-0 mx-auto rounded-full bg-[#E3F5FF]"></div>
                        @endif

                        <p class="text-lg font-Ogg mt-5">{{ $person->joinedDate }}</p>
                        <h3 class="mt-2 text-5xl text-black font-Ogg font-bold italic">{{ $person->name }}</h3>
                        <p class="text-lg font-Helvetica font-light mt-3">
                            {{ $person->pronouns }} {{ $person->role }}
                            <br>
                            {{ $person->country }}
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>
    </section>
@endsection

@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">Projects</h1>

            <p class="font-Helvetica font-light leading-6">
                A major part of the artistic practice runs through collaborative projects or open calls, exposing one’s
                work to a broader audience. Here, the same concept of accessibility applies: Those who know of certain
                places, events or institutions are more likely to be exhibited. If that knowledge isn’t shared, it stays
                isolated.
            </p>
            <p class="font-Helvetica font-light leading-6">
                Individuals with that knowledge can apply to open calls or projects in the name of the 5m2 Collective to
                gain access to specific projects. In a further step this access can be shared with other members of the
                collective, opening doors and enabling new possibilities.
            </p>

        </article>

        <x-heart-icon class="w-12 my-6"/>

    </section>

    @php
        $projects = [
            (object)[
				'image' => '/images/projects/diploma-exhibition.jpeg',
				'date' => '9. Juni 2022',
				'title' => 'Diploma Exhibition',
				'description' => 'The 5m2 Collective was conceived by Lucy Fabian and Nicole Hirschi as a diploma project for Trends & Identity. As a finale, all of the diploma projects will be exhibited at the Zurich University of the Arts. The exhibition space available for this project will be shared with the Ukrainian Floral Designer Ira Evora. As a part of the 5m2 Collective she can use the given space for her own work, gaining visibility and access to new potential clients.',
				'address' => 'At ZHdK, Pfingstweidstrasse 96, 8005 Zürich'
    ],
           (object)[
				'image' => '/images/projects/Rhizom.png',
				'date' => '4. Juni 2022',
				'title' => 'Rhizom',
				'description' => 'RHIZOM is a transdisciplinary festival that is dedicated to cultivating alternative electronic music and arts. It commits itself to uniqueness, character, innovation, passion and DIY-spirit. The 5m2 Collective takes it’s place in the festival toilets, creating an installation that collects the current and passed moods of the people within the collective and transmits them as an immersive experience. ',
				'address' => 'At Rote Fabrik, Seestrasse 395, 8038 Zürich'
    ],
];
    @endphp

    <section class="bg-white self-center mb-16 lg:w-5/6 mx-auto">
        <div class="mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-12">
            <ul
                role="list"
                class="mx-auto divide-y divide-[#C4C4C4] border-y border-[#C4C4C4]">

                @foreach ($projects as $project)
                    <li class="flex flex-col lg:flex-row py-2 lg:py-10">

                        <img
                            class="hidden lg:inline-flex h-44 w-44 md:w-80 md:h-80 rounded-full my-auto self-center lg:mr-10"
                            src="{{url( $project->image )}}"
                            alt=""
                        >

                        <div class="flex flex-col text-center lg:text-left text-lg leading-6 font-medium">
                            <p class="text-lg lg:text-xl font-Ogg font-medium text-black mb-0">{{ $project->date }}</p>
                            <div>
                                <h3 class="font-bold font-Ogg italic text-gray-900 my-3 text-4xl lg:text-5xl lg:pt-3">{{ $project->title }}</h3>
                                <p class="text-lg font-Helvetica font-light leading-6 text-black my-3">
                                    {{ $project->description }}
                                </p>
                            </div>

                            <div class="flex h-full justify-center lg:justify-start">
                                <x-heart-icon class="h-6 w-6 lg:h-9 lg:w-9 bg-[#E3F5FF] rounded-full self-end"></x-heart-icon>
                                <p class="text-base lg:text-xl font-bold text-black font-Ogg ml-4 self-end">
                                    {{ $project->address }}
                                </p>
                            </div>

                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </section>

    <div class="self-center my-6"></div>

@endsection


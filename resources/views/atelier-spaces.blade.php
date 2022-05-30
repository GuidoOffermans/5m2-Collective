@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 relative mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">Find a Studio</h1>
            <p class="font-Helvetica font-light">
                Are you in need of a studio space for your creative practice? Is it due to structural reasons*, that you
                don’t have access to a studio? Find a shared space here:
            </p>
        </article>

        <x-heart-icon class="my-6"/>

        <article class="prose prose-md lg:prose-xl italic">
            <p class="font-Helvetica font-light">
                *Structural reasons refers to the marginalization and the disadvantages imposed on certain groups of
                people due to embedded discriminatory practices. They show as racisms, ableism, homophobia, classism.
            </p>
        </article>
        <a class="2xl:absolute 2xl:right-6 mt-8" href="{{route('share-your-atelier')}}">
            <button
                type="button"
                class="flex flex-col justify-center items-center p-3 border border-transparent rounded-full
                shadow-sm text-black text-lg font-bold text-3xl font-Ogg bg-[#E3F5FF] hover:bg-[#A7DFFF] focus:outline-none
                focus:ring-2 focus:ring-offset-2 focus:ring-[#007cc1] h-48 w-48 rotate-[13deg] "
            >
                Have a Studio?
                <x-arrow class="w-2/4"/>
            </button>
        </a>
    </section>


    <section class="bg-white self-center mb-16 w-5/6 mx-auto">
        <div class=" mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-12">
            <div class="space-y-12">
                <ul role="list"
                    class="mx-auto space-y-16 sm:grid grid-cols-1 sm:gap-0 sm:space-y-0  divide-y divide-gray-400 border-y border-gray-400">

                    @foreach ($ateliers as $atelier)
                        <li class="hover:bg-[#EBEBEB] ">
                            <a href="{{route('atelier', $atelier->id)}}">
                                <div class="flex space-x-4 justify-between content-center my-8 px-32">
                                    <div class="flex">
                                        <img class="h-52 w-52 rounded-full xl:w-52 xl:h-52 my-auto"
                                             src="https://images.unsplash.com/photo-1601397210737-a5534480bdc5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670"
                                             alt="">

                                        <div
                                            class="flex flex-col text-left text-lg leading-6 font-medium space-y-4 pl-12">
                                            <p class="text-xl font-bold text-black font-Ogg">studio</p>
                                            <h3 class="text-5xl font-bold text-black font-Ogg italic">{{$atelier->name}}</h3>
                                            <div>
                                                <p class="text-xl text-black font-light font-Helvetica">
                                                    {{$atelier->address}}<br>
                                                    {{$atelier->postalCode}} {{$atelier->city}}</p>
                                            </div>
                                            <div class="flex justify-items-start content-center items-center">
                                                <x-heart-icon class="h-9 w-9 bg-[#E3F5FF] rounded-full"></x-heart-icon>
                                                <p class="text-xl font-bold font-Ogg text-black ml-4">By 5m2
                                                    Collective</p>
                                            </div>
                                        </div>
                                    </div>
                                    <x-arrow class="m-auto"/>

                                </div>
                            </a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>

    <div class="my-24"></div>
    <div class="my-6"></div>

@endsection

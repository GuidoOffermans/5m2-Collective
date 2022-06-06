@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 relative mx-auto">

        <div class="my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">Find a Studio</h1>
            <p class="font-Helvetica font-light leading-6">
                Are you new to the city due to migration or flight? Do you need a studio space for your creative
                practice? Is your lack of studio space due to reasons such as the marginalization and the disadvantages
                imposed on certain groups of people? Would you like to have access to and knowledge about the creative
                scene in Zurich to widen your artistic reach? Find a shared space here:
            </p>
        </article>

        <x-heart-icon class="my-6"/>

    </section>

    <section class="bg-white self-center mb-16 xl:w-5/6 mx-auto relative">

        <a class="flex justify-center static lg:absolute lg:right-14 lg:-top-16 mx-auto" href="{{route('share-a-studio')}}">
            <button
                type="button"
                class="inline-flex flex-col justify-center items-center p-3 border border-transparent rounded-full
                shadow-sm text-black text-lg font-bold text-3xl font-Ogg bg-[#E3F5FF] hover:bg-[#A7DFFF] focus:outline-none
                focus:ring-2 focus:ring-offset-2 focus:ring-[#007cc1] h-44 w-44 md:h-48 md:w-48 rotate-[13deg]"
            >
                Have a Studio?
                <x-arrow class="w-2/4"/>
            </button>
        </a>

        <div class="mx-auto py-12 px-0 text-center sm:px-6 lg:px-8 lg:py-12">
            <div class="space-y-12">
                <ul
                    role="list"
                    class="mx-auto divide-y divide-gray-400 border-y border-gray-400">

                    @foreach ($ateliers as $atelier)
                        <li class="hover:bg-[#EBEBEB]">
                            <a href="{{route('atelier', $atelier->id)}}">
                                <div
                                    class="flex space-x-4 justify-between lg:justify-start content-center w-full py-4 md:py-8">

                                    <div class="flex justify-start md:mx-0 w-full px-3 sm:px-4">

                                        <div
                                            class="flex flex-col justify-between text-left font-medium py-1 xl:py-4 md:ml-10 ">
                                            <p class="text-sm md:text-lg lg:text-xl font-bold text-black font-Ogg">
                                                studio
                                            </p>
                                            <h3 class="text-2xl md:text-4xl lg:text-5xl font-bold text-black font-Ogg italic xl:py-4">{{$atelier->name}}</h3>
                                            <div>
                                                <p class="text-sm md:text-lg lg:text-xl text-black font-light font-Helvetica">
                                                    {{$atelier->address}}<br>
                                                    {{$atelier->postalCode}} {{$atelier->city}}</p>
                                            </div>
                                            <div class="hidden lg:flex justify-items-start content-center items-center">
                                                <x-heart-icon class="h-9 w-9 bg-[#E3F5FF] rounded-full"></x-heart-icon>
                                                <p class="text-lg md:text-xl font-bold font-Ogg text-black ml-4">
                                                    By 5m2 Collective
                                                </p>
                                            </div>
                                        </div>

                                        <img
                                            class="h-24 w-24 sm:h-32 sm:w-32 md:w-48 md:h-48 lg:w-52 lg:h-52 rounded-full my-auto ml-auto md:ml-0 lg:mr-12 md:order-first"
                                            src="https://images.unsplash.com/photo-1601397210737-a5534480bdc5?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2670"
                                            alt="">

                                    </div>
                                    <div class="hidden lg:flex justify-center align-middle w-1/2">
                                        <x-arrow class="my-auto"/>
                                    </div>


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

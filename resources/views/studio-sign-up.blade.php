@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 relative mx-auto">

        <div class="self-center my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">{{$atelier->name}}</h1>
            <p class="font-Helvetica font-light leading-6">
                You found your prefered slot? Please fill out the form below.
            </p>
        </article>

        <x-heart-icon class="self-center my-6"/>

    </section>

    <div class="self-center my-12"></div>

    <section class="flex flex-col font-Ogg">
        {{--                @if( true )--}}
        @if( session()->has('filledForm') )
            <div class="border border-[#C4C4C4] mx-2 lg:mx-20" x-init="$el.scrollIntoView()">
                <div class="my-32"></div>
                <div class="flex flex-col bg-[#EDEDED] mx-auto w-3/4 h-80 justify-center items-center">
                    <h2 class="font-Ogg font-bold text-4xl lg:text-5xl italic">Thank You!</h2>
                    <div class="my-2"></div>
                    <p class="font-Helvetica font-light text-lg text-center leading-6 italic">
                        We will get in touch with you to discuss the further steps as soon as everything is coordinated
                        :)
                    </p>
                   <x-heart-icon class="w-12 my-6"/>
                </div>
                <div class="my-32"></div>
            </div>
            <div class="my-32"></div>

        @else
            <h2 class="mx-auto mb-4 text-4xl">Sign Up</h2>
            <form
                class="border border-[#C4C4C4] space-y-8 lg:divide-y divide-[#C4C4C4] w-full lg:w-3/4 mx-auto mb-20 tracking-wider"
                method="POST"
                action="{{ route('studio-sign-up.submit',$atelier->id )}}"
            >
                @csrf
                <div class="space-y-8 divide-y divide-[#C4C4C4] mx-10">
                    <div class="">
                        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-12 sm:grid-cols-6">

                            <label for="studio-name" class="hidden">
                                <input
                                    type="text"
                                    id="studio-name"
                                    name="studio-name"
                                    value="{{$atelier->name}}"
                                >
                            </label>

                            <div class="sm:col-span-3">
                                <label for="name" class="flex flex-col text-xl font-medium text-black">
                                    Your Name
                                    @error('name')
                                    <span class="text-red-600 text-sm"
                                          x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           autocomplete="name"
                                           placeholder="Jane Doe"
                                           value="{{old('name')}}"
                                           class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('name') is-invalid @enderror">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email" class="flex flex-col text-xl font-medium text-black">
                                    Your Email
                                    @error('email')
                                    <span class="text-red-600 text-sm"
                                          x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                    <input type="email"
                                           name="email"
                                           id="email"
                                           autocomplete="email"
                                           placeholder="you@atelier.ch"
                                           value="{{old('email')}}"
                                           class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('email') is-invalid @enderror">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div class="flex justify-between">
                                    <label for="phone" class="block text-xl font-medium text-black">
                                        Your Phone Number
                                        @error('phone')
                                        <span class="text-red-600 text-sm mr-2"
                                              x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                        @enderror
                                    </label>
                                </div>
                                <div class="mt-1">
                                    <input type="text"
                                           name="phone"
                                           id="phone"
                                           class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('phone') is-invalid @enderror"
                                           placeholder="+41 76 555 98 65"
                                           value="{{old('phone')}}"
                                           aria-describedby="phone">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="language" class="flex flex-col text-xl font-medium text-black">
                                    Preferred Language
                                    @error('studio-name')
                                    <span class="text-red-600 text-sm"
                                          x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                    <input
                                        type="text"
                                        name="language"
                                        id="language"
                                        autocomplete="language"
                                        placeholder="German"
                                        value="{{old('language')}}"
                                        class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('language') is-invalid @enderror">
                                </div>
                            </div>


                            <div class="sm:col-span-6">
                                <label for="skills" class="flex flex-col text-xl font-medium text-black">
                                    What skills do you have and what is your preferred medium?
                                    @error('skills')
                                    <span class="text-red-600 text-sm"
                                          x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                <textarea
                                    id="skills"
                                    name="skills"
                                    rows="3"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4] @error('skills') is-invalid @enderror"
                                >{{old('skills')}}</textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="dates" class="flex flex-col text-xl font-medium text-black">
                                    Preferred Dates to use the space according to the Calendar.
                                    @error('dates')
                                    <span class="text-red-600 text-sm"
                                          x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                <textarea
                                    id="dates"
                                    name="dates"
                                    rows="3"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4] @error('dates') is-invalid @enderror"
                                >{{old('dates')}}</textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="comments" class="flex flex-col text-xl font-medium text-black">
                                    Further Comments
                                    @error('comments')
                                    <span class="text-red-600 text-sm"
                                          x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                <textarea id="comments"
                                          name="comments"
                                          rows="3"
                                          class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4] @error('comments') is-invalid @enderror"
                                >{{old('comments')}}</textarea>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="py-5">
                        <div class="flex justify-center lg:justify-end">
                            <button
                                type="submit"
                                class="bg-white py-2 px-4 border border-[#C4C4C4] shadow-sm
                                text-xl font-medium text-black hover:bg-gray-50 focus:outline-none
                                focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            >
                                Send
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        @endif
    </section>

@endsection


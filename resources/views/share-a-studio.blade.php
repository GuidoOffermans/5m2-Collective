@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 relative mx-auto">

        <div class="self-center my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">Share your Studio</h1>
            <p class="font-Helvetica font-light leading-6">
                Do you have available space in a studio? If yes, are there days when you aren’t there actively using the
                space? Or is there extra space that isn’t occupied? Would you be willing to share that space with
                another person when you aren’t around? Finding a studio space – especially for people new to the city
                due to migration and with very limited financial means – can be extremely tricky. By offering to share
                your space free of charge, you could help people without access follow their own artistic practice.
                <br>
                Providing a space through the collective calls forth an openness for other realities. It’s essential to
                be aware of one’s responsibilities as a person with access. Exploitive or discriminatory behavior of any
                kind will not be tolerated.
            </p>
        </article>

       <x-heart-icon class="w-12 my-6"/>

    </section>

    <div class="my-6"></div>

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
                action="{{ route('share-a-studio.submit') }}"
            >
                @csrf
                <div class="space-y-8 divide-y divide-[#C4C4C4] mx-10">
                    <div class="">
                        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-12 sm:grid-cols-6">

                            <div class="sm:col-span-3">
                                <label for="name" class="flex flex-col text-xl font-medium text-black">
                                    Your Name
                                    @error('name')
                                    <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
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
                                    <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
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
                                        <span class="text-red-600 text-sm mr-2">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <span class="text-sm text-black" id="phone-optional">Optional</span>
                                </div>
                                <div class="mt-1">
                                    <input type="text"
                                           name="phone"
                                           id="phone"
                                           class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('phone') is-invalid @enderror"
                                           placeholder="+41 76 555 98 65"
                                           value="{{old('phone')}}"
                                           aria-describedby="phone-optional">
                                </div>
                            </div>

                            <div class="sm:col-span-3"></div>

                            <div class="sm:col-span-3">
                                <label for="studio-name" class="flex flex-col text-xl font-medium text-black">
                                    Name of the Studio
                                    @error('studio-name')
                                    <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                    <input
                                        type="text"
                                        name="studio-name"
                                        id="studio-name"
                                        autocomplete="studio-name"
                                        placeholder="Atelier 5m2 Collective"
                                        value="{{old('studio-name')}}"
                                        class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('studio-name') is-invalid @enderror">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="studio-address" class="flex flex-col text-xl font-medium text-black">
                                    Address of the Studio
                                    @error('studio-address')
                                      <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                    <input
                                        type="text"
                                        name="studio-address"
                                        id="studio-address"
                                        autocomplete="studio-address"
                                        placeholder="Atelierstreet 123, 800, Zürich"
                                        value="{{old('studio-address')}}"
                                        class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('studio-address') is-invalid @enderror">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="studio-about" class="flex flex-col text-xl font-medium text-black">
                                    Is it a shared space? If yes, how many other people are using the space?
                                    @error('studio-about')
                                      <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                <textarea
                                    id="studio-about"
                                    name="studio-about"
                                    rows="3"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4] @error('studio-about') is-invalid @enderror"
                                >{{old('studio-about')}}</textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="studio-extra" class="flex flex-col text-xl font-medium text-black">
                                    What infrastructure is there? (Kitchen, toilet, table etc.)
                                    Are there things others can use? Or things that are completely off-limits?
                                    @error('studio-extra')
                                      <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                <textarea
                                    id="studio-extra"
                                    name="studio-extra"
                                    rows="3"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4] @error('studio-extra') is-invalid @enderror"
                                >{{old('studio-extra')}}</textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="studio-key" class="flex flex-col text-xl font-medium text-black">
                                    Key exchange/ Accessibility: How can we enter the space?
                                    @error('studio-key')
                                      <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                <textarea id="studio-key"
                                          name="studio-key"
                                          rows="3"
                                          class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4] @error('studio-key') is-invalid @enderror"
                                >{{old('studio-key')}}</textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-6 border-b">
                                <h3 class="text-lg leading-6 text-3xl text-gray-900">
                                    Contact person in the studio when
                                    you aren’t there:
                                </h3>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="contact-name" class="flex flex-col text-xl font-medium text-black">
                                    Contact Name
                                    @error('contact-name')
                                      <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                    <input type="text"
                                           name="contact-name"
                                           id="contact-name"
                                           autocomplete="contact-name"
                                           placeholder="Jane Doe"
                                           value="{{old('contact-name')}}"
                                           class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('contact-name') is-invalid @enderror">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="contact-email" class="flex flex-col text-xl font-medium text-black">
                                    Contact Email
                                    @error('contact-email')
                                      <span class="text-red-600 text-sm" x-init="$el.scrollIntoView({block: 'center'})">{{ $message }}</span>
                                    @enderror
                                </label>
                                <div class="mt-1">
                                    <input type="email"
                                           name="contact-email"
                                           id="contact-email"
                                           autocomplete="contact-email"
                                           placeholder="contact@atelier.ch"
                                           value="{{old('contact-email')}}"
                                           class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('contact-email') is-invalid @enderror">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <div class="flex justify-between">
                                    <label for="contact-phone-number"
                                           class="flex justify-items-center text-xl font-medium text-black w-full">
                                        Contact Phone Number
                                        @error('contact-phone-number')
                                        <span
                                            class="inline-flex text-red-600 text-sm ml-auto mr-2">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <span class="text-sm text-black" id="contact-phone-number-optional">Optional</span>
                                </div>
                                <div class="mt-1">
                                    <input type="text"
                                           name="contact-phone"
                                           id="contact-phone"
                                           class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4] @error('contact-phone') is-invalid @enderror"
                                           placeholder="+41 76 555 98 88"
                                           value="{{old('contact-phone')}}"
                                           aria-describedby="contact-phone-optional">
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


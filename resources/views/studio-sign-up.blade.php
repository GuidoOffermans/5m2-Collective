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

    <div class="self-center my-24"></div>

    <section class="flex flex-col font-Ogg">
        <h2 class="mx-auto mb-4 text-4xl">Sign Up</h2>

        <form class="border border-[#C4C4C4] space-y-8 divide-y divide-[#C4C4C4] w-3/4 mx-auto mb-20 tracking-wider">

            <div class="space-y-8 divide-y divide-[#C4C4C4] mx-10">
                <div class="">
                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-12 sm:grid-cols-6">

                        <div class="sm:col-span-3">
                            <label for="name" class="block text-xl font-medium text-black">
                                Your Name
                            </label>
                            <div class="mt-1">
                                <input type="text"
                                       name="name"
                                       id="name"
                                       autocomplete="name"
                                       placeholder="Jane Doe"
                                       class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="email" class="block text-xl font-medium text-black">
                                Your Email
                            </label>
                            <div class="mt-1">
                                <input type="email"
                                       name="email"
                                       id="email"
                                       autocomplete="email"
                                       placeholder="you@atelier.ch"
                                       class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <div class="flex justify-between">
                                <label for="phone-number" class="block text-xl font-medium text-black">
                                    Your Phone Number
                                </label>
                            </div>
                            <div class="mt-1">
                                <input type="text"
                                       name="phone-number"
                                       id="phone-number"
                                       class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]"
                                       placeholder="+41 76 555 98 65"
                                       aria-describedby="email-optional">
                            </div>
                        </div>

                        <div class="sm:col-span-3"></div>

                        <div class="sm:col-span-3">
                            <label for="atelier" class="block text-xl font-medium text-black">
                                Name of the Studio
                            </label>
                            <div class="mt-1">
                                <input
                                    type="text"
                                    name="atelier"
                                    id="atelier"
                                    autocomplete="atelier"
                                    placeholder="Atelier 5m2 Collective"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="language" class="block text-xl font-medium text-black">
                                Preferred Language
                            </label>
                            <div class="mt-1">
                                <input
                                    type="text"
                                    name="language"
                                    id="language"
                                    autocomplete="language"
                                    placeholder="German"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]">
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-xl font-medium text-black">
                                What skills do you have and what is your preferred medium?
                            </label>
                            <div class="mt-1">
                                <textarea
                                    id="about"
                                    name="about"
                                    rows="3"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4]"
                                ></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-xl font-medium text-black">
                                Preferred Dates to use the space according to the Calendar
                            </label>
                            <div class="mt-1">
                                <textarea
                                    id="about"
                                    name="about"
                                    rows="3"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4]"
                                ></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-xl font-medium text-black">
                                Further Comments
                            </label>
                            <div class="mt-1">
                                <textarea id="about" name="about" rows="3"
                                          class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4]"
                                ></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-xl font-medium text-black">
                                Upload images of your work (optional)
                            </label>
                            <div class="mt-1 space-y-4">
                                <div
                                    class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                             viewBox="0 0 48 48" aria-hidden="true">
                                            <path
                                                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload-1"
                                                   class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <span class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</span>
                                                <input id="file-upload-1" name="file-upload" type="file"
                                                       class="sr-only"
                                                       multiple
                                                >
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="py-5">
                    <div class="flex justify-end">
                        <button
                            type="button"
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
    </section>

@endsection


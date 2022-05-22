@extends('layouts.admin')

@section('primary-content')
    <section class="px-8 mb-10">
        <div class="md:flex md:items-center md:justify-between border-b my-4">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Add an Atelier Space</h2>
            </div>
        </div>

        <form class="space-y-8 divide-y divide-gray-200" method="POST" action="/admin/ateliers/create">
            @method('POST')
            @csrf
            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Atelier</h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Text text text</p>
                    </div>

                    <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">
                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="first-name"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Atelier name </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="atelierName" id="atelierName" autocomplete="atelierName"
                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="address"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Address
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="address" id="address"
                                           autocomplete="address"
                                           class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="city" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    City </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="city" id="city" autocomplete="address-level2"
                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            {{--                            <div--}}
                            {{--                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">--}}
                            {{--                                <label for="region" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">--}}
                            {{--                                    State--}}
                            {{--                                    / Province </label>--}}
                            {{--                                <div class="mt-1 sm:mt-0 sm:col-span-2">--}}
                            {{--                                    <input type="text" name="region" id="region" autocomplete="address-level1"--}}
                            {{--                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="postalCode"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    ZIP / Postal code </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="postalCode" id="postalCode" autocomplete="postalCode"
                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="cover-photo"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Photo </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <div
                                        class="max-w-lg flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                        <div class="space-y-1 text-center">
                                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                 fill="none"
                                                 viewBox="0 0 48 48" aria-hidden="true">
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="flex text-sm text-gray-600">
                                                <label for="file-upload"
                                                       class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                    <span>Upload a file</span>
                                                    <input id="file-upload" name="file-upload" type="file"
                                                           class="sr-only">
                                                </label>
                                                <p class="pl-1">or drag and drop</p>
                                            </div>
                                            <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    About </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <textarea id="about" name="about" rows="3"
                                          class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                                    <p class="mt-2 text-sm text-gray-500">Write a few sentences about the atelier.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
                        <div>
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Atelier owner</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">text</p>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="first-name"
                                       class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    First name </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Last name </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                           class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                    Email
                                    address </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                           class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="button"
                                class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <button type="submit"
                                class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </div>
            </div>
        </form>

    </section>
@endsection

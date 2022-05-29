@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center">

        <div class="self-center my-6"></div>

        <article class="prose self-center">
            <h1>Share your Studio</h1>
            <p>
                Do you have a place in a studio? If yes, are there days when you aren’t there actively using the space?
                Would you be willing to share that space with another person when you aren’t around? Finding a space -
                especially with very limited financial means - can be extremely tricky. By offering your own space
                solidarily you could help people without access follow their own artistic practice.
            </p>
        </article>

        <x-heart-icon class="self-center my-6"/>

        <article class="prose self-center">
            <p>
                Providing a space through the collective calls forth an openness for other realities. It’s essential to
                be aware of ones responsibilities as a person with access. Exploitive or discriminatory behavior of any
                kind will not be tolerated.
            </p>
        </article>

    </section>

    <div class="self-center my-24"></div>

    <section class="flex flex-col ">
        <h2 class="mx-auto mb-4 text-3xl">Sign Up</h2>

        <form class="border space-y-8 divide-y divide-gray-200 w-3/4 mx-auto mb-20">

            <div class="space-y-8 divide-y divide-gray-200 mx-10">
                <div class="">
                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-4 sm:grid-cols-6">

                        <div class="sm:col-span-3">
                            <label for="name" class="block text-sm font-medium text-gray-700">
                                Your Name
                            </label>
                            <div class="mt-1">
                                <input type="text"
                                       name="name"
                                       id="name"
                                       autocomplete="name"
                                       placeholder="Jane Doe"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="email" class="block text-sm font-medium text-gray-700">
                                Your Email
                            </label>
                            <div class="mt-1">
                                <input type="email"
                                       name="email"
                                       id="email"
                                       autocomplete="email"
                                       placeholder="you@atelier.ch"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <div class="flex justify-between">
                                <label for="phone-number" class="block text-sm font-medium text-gray-700">
                                    Your Phone Number
                                </label>
                                <span class="text-sm text-gray-500" id="phone-number-optional">Optional</span>
                            </div>
                            <div class="mt-1">
                                <input type="text"
                                       name="phone-number"
                                       id="phone-number"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300"
                                       placeholder="+41 76 555 98 65"
                                       aria-describedby="email-optional">
                            </div>
                        </div>

                        <div class="sm:col-span-3"></div>

                        <div class="sm:col-span-3">
                            <label for="atelier" class="block text-sm font-medium text-gray-700">
                                Name of the Studio
                            </label>
                            <div class="mt-1">
                                <input
                                    type="text"
                                    name="atelier"
                                    id="atelier"
                                    autocomplete="atelier"
                                    placeholder="Atelier 5m2 Collective"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="Address" class="block text-sm font-medium text-gray-700">
                                Address of the Studio
                            </label>
                            <div class="mt-1">
                                <input
                                    type="text"
                                    name="Address"
                                    id="Address"
                                    autocomplete="Address"
                                    placeholder="Atelierstreet 123, 800, Zürich"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                Is it a shared space? If yes, how many other people are using the space?
                            </label>
                            <div class="mt-1">
                                <textarea
                                    id="about"
                                    name="about"
                                    rows="3"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300"
                                ></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                What infrastructure is there? (Kitchen, toilet, table etc.)
                                Are there things others can use? Or things that are completely off-limits?
                            </label>
                            <div class="mt-1">
                                <textarea
                                    id="about"
                                    name="about"
                                    rows="3"
                                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300"
                                ></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700">
                                Key exchange/ Accessibility: How can we enter the space?
                            </label>
                            <div class="mt-1">
                                <textarea id="about" name="about" rows="3"
                                          class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300"
                                ></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6 border-b">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">
                                Contact person in the studio when
                                you aren’t there:
                            </h3>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="contact-name" class="block text-sm font-medium text-gray-700">
                                Contact Name
                            </label>
                            <div class="mt-1">
                                <input type="text"
                                       name="contact-name"
                                       id="contact-name"
                                       autocomplete="contact-name"
                                       placeholder="Jane Doe"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="contact-email" class="block text-sm font-medium text-gray-700">
                                Contact Email
                            </label>
                            <div class="mt-1">
                                <input type="email"
                                       name="contact-email"
                                       id="contact-email"
                                       autocomplete="contact-email"
                                       placeholder="contact@atelier.ch"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <div class="flex justify-between">
                                <label for="contact-phone-number" class="block text-sm font-medium text-gray-700">
                                    Contact Phone Number
                                </label>
                                <span class="text-sm text-gray-500" id="contact-phone-number-optional">Optional</span>
                            </div>
                            <div class="mt-1">
                                <input type="text"
                                       name="contact-phone-number"
                                       id="contact-phone-number"
                                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300"
                                       placeholder="+41 76 555 98 88"
                                       aria-describedby="contact-phone-number-optional">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="py-5">
                    <div class="flex justify-end">
                        <button
                            type="button"
                            class="bg-white py-2 px-4 border border-gray-300 shadow-sm
                                text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none
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


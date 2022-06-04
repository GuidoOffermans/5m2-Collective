@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 relative mx-auto">

        <div class="self-center my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">Share your Studio</h1>
            <p class="font-Helvetica font-light leading-6">
                Do you have available space in a studio? If yes, are there days when you aren’t there actively using the
                space? Or is there extra space that isn’t occupied? Would you be willing to share that space with
                another person when you aren’t around? Finding a studio space - especially for people new to the city
                due to migration and with very limited financial means - can be extremely tricky. By offering to share
                your space free of charge, you could help people without access follow their own artistic practice.
                <br>
                Providing a space through the collective calls forth an openness for other realities. It’s essential to
                be aware of one’s responsibilities as a person with access. Exploitive or discriminatory behavior of any
                kind will not be tolerated.
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
                                <span class="text-sm text-black" id="phone-number-optional">Optional</span>
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
                            <label for="Address" class="block text-xl font-medium text-black">
                                Address of the Studio
                            </label>
                            <div class="mt-1">
                                <input
                                    type="text"
                                    name="Address"
                                    id="Address"
                                    autocomplete="Address"
                                    placeholder="Atelierstreet 123, 800, Zürich"
                                    class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]">
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-xl font-medium text-black">
                                Is it a shared space? If yes, how many other people are using the space?
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
                                What infrastructure is there? (Kitchen, toilet, table etc.)
                                Are there things others can use? Or things that are completely off-limits?
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
                                Key exchange/ Accessibility: How can we enter the space?
                            </label>
                            <div class="mt-1">
                                <textarea id="about" name="about" rows="3"
                                          class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-[#C4C4C4]"
                                ></textarea>
                            </div>
                        </div>

                        <div class="sm:col-span-6 border-b">
                            <h3 class="text-lg leading-6 text-3xl text-gray-900">
                                Contact person in the studio when
                                you aren’t there:
                            </h3>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="contact-name" class="block text-xl font-medium text-black">
                                Contact Name
                            </label>
                            <div class="mt-1">
                                <input type="text"
                                       name="contact-name"
                                       id="contact-name"
                                       autocomplete="contact-name"
                                       placeholder="Jane Doe"
                                       class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="contact-email" class="block text-xl font-medium text-black">
                                Contact Email
                            </label>
                            <div class="mt-1">
                                <input type="email"
                                       name="contact-email"
                                       id="contact-email"
                                       autocomplete="contact-email"
                                       placeholder="contact@atelier.ch"
                                       class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <div class="flex justify-between">
                                <label for="contact-phone-number" class="block text-xl font-medium text-black">
                                    Contact Phone Number
                                </label>
                                <span class="text-sm text-black" id="contact-phone-number-optional">Optional</span>
                            </div>
                            <div class="mt-1">
                                <input type="text"
                                       name="contact-phone-number"
                                       id="contact-phone-number"
                                       class="font-Helvetica shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-[#C4C4C4]"
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


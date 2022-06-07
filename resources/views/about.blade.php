@extends('layouts.app')

@section('content')
    <section class="flex flex-col text-center place-content-center items-center w-5/6 mx-auto">

        <div class="self-center my-6"></div>

        <article class="prose prose-md lg:prose-xl">
            <h1 class="font-Ogg font-bold">About</h1>
            <p class="font-Helvetica font-light leading-6">
                Finding space for creative freedom can be challenging. But once acquired, it opens up almost infinite
                possibilities. Most of these spaces draw in like-minded people, generating otherwise hard-to-come-by
                access to projects, places and options. For some, finding access to those places comes easier than for
                others. Our goal is to connect people with a strong foothold in the creative network with those, who
                don’t. Especially for people in precarious or marginalized situations, this kind of access often stays
                hidden. By tapping into different networks, we want to break down these invisible yet tangible walls.
                Our goal is to generate a space for solidarity and support, raising questions about accessibility and
                privilege.
            </p>
        </article>

        <div class="my-6"></div>
       <x-heart-icon class="w-12 my-6"/>

        <article class="prose prose-md lg:prose-xl">
            <h2 class="font-Ogg font-bold">Our Vision</h2>
            <ul class="font-Helvetica font-light leading-6 list-none">
                <li>- Create a collective support structure for and of creative people</li>
                <li>- Negotiate and democratize access to art and design spaces and projects</li>
            </ul>

        </article>
        <div class="my-6"></div>
       <x-heart-icon class="w-12 my-6"/>

        <article class="prose prose-md lg:prose-xl">
            <h2 class="font-Ogg font-bold">Our Approach</h2>
            <ul class="font-Helvetica font-light leading-6 list-none">
                <li>- Build bridges between existing networks</li>
                <li>- Collect unused spaces on the platform and make them accessible</li>
                <li>- Facilitate possibilities to work on projects as a collective</li>
            </ul>

        </article>
        <div class="my-6"></div>
       <x-heart-icon class="w-12 my-6"/>

        <article class="prose prose-md lg:prose-xl">
            <h2 class="font-Ogg font-bold">Our History</h2>
            <p class="font-Helvetica font-light leading-6">
                This collective originated out of an urge to react to the current global humanitarian crises in an
                active and designedly way. After an extensive research period, the concept of using our standing and
                access within the creative scene and open it up, just made sense. As a result, we created a structure
                and a platform that generates low threshold use of space, that is otherwise left unused.
            </p>
            <p class="font-Helvetica font-light leading-6">
                The collective’s name derives from a statement by the city of Zurich, stating that every person should
                have access to five square meters of free space. Generally, this refers to parks and public facilities.
                For us, it opened up a discussion around what free space can stand for and who effectively has access or
                knowledge to these places.
            </p>
        </article>
        <div class="my-6"></div>
        <x-heart-icon class=" my-6"/>

        <div class="my-28"></div>

        <article class="prose prose-md lg:prose-xl">
            <h2 class="font-Ogg font-bold">Credits</h2>
            <p class="font-Helvetica font-light leading-6 text-black">
                <b class="font-Ogg font-bold">Concept and design:</b> Lucy Fabian & Nicole Hirschi<br>
                <b class="font-Ogg font-bold">Logo and initial visual identity:</b> Lucy Fabian & Nicole Hirschi<br>
                <b class="font-Ogg font-bold">Typefaces:</b> Ogg by <i>Sharp Type</i><br>
                <b class="font-Ogg font-bold">Website design:</b> Nicole Hirschi<br>
                <b class="font-Ogg font-bold">Website development:</b> Guido Offermans</p>
        </article>

        <div class="my-36"></div>
    </section>
@endsection

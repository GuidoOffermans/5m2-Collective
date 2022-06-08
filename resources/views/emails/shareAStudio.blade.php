<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{$name}}signed up to share studio: {{$studioName}}</title>
</head>
<body>
<h1>{{$name}}signed up to share studio: {{$studioName}}</h1>

<article>
    <P><strong>name:</strong> {{$name}}</P>
    <P><strong>email:</strong> {{$email}}</P>
    <P><strong>phone:</strong> {{$phone}}</P>
    <P><strong>Preferred language:</strong> {{$language}}</P>
    <P><strong>studioName:</strong> {{$studioName}}</P>
    <P><strong>studioAddress:</strong> {{$studioAddress}}</P>
    <P><strong>Is it a shared space? If yes, how many other people are using the space?</strong> <br>
        {{$studioAbout}}
    </P>
    <P>
        <strong>
            What skills do the other people in the studio have or what medium do they work with?
        </strong> <br>
        {{$studioExtra}}
    </P>
    <P>
        <strong>
            What infrastructure is there? (beside the basic needs, like machines, tools etc.) Are there things for
            collective usage? Or things that are completely off-limits?
        </strong> <br>
        {{$studioInfra}}
    </P>
    <P><strong>Key exchange: How can we enter the space?:</strong> <br>
        {{$studioKey}}
    </P>

    <h2><strong>Contact person in the studio when you aren’t there:</strong></h2>
    <P><strong>contactName:</strong> {{$contactName}}</P>
    <P><strong>contactPhone:</strong> {{$contactPhone}}</P>
</article>

</body>
</html>

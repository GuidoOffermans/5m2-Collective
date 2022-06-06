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
    <P><strong>studioName:</strong> {{$studioName}}</P>
    <P><strong>studioAddress:</strong> {{$studioAddress}}</P>
    <P><strong>Is it a shared space? If yes, how many other people are using the space?</strong> <br>
        {{$studioAbout}}
    </P>
    <P>
        <strong>
            What infrastructure is there? (Kitchen, toilet, table etc.) Are there things others can use?
            Or things that are completely off-limits?:
        </strong> <br>
        {{$studioExtra}}
    </P>
    <P><strong>Key exchange: How can we enter the space?:</strong> <br>
        {{$studioKey}}
    </P>

    <h2><strong>Contact person in the studio when you aren’t there:</strong></h2>
    <P><strong>contactName:</strong> {{$contactName}}</P>
    <P><strong>contactEmail:</strong> {{$contactEmail}}</P>
    <P><strong>contactPhone:</strong> {{$contactPhone}}</P>
</article>

</body>
</html>

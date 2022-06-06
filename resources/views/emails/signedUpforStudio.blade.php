<!DOCTYPE html>
<html lang="en">
<head>
    <title>Someone signed up for studio: {{$studioName}} </title>
</head>
<body>
<h1>Someone new signed up for studio: {{$studioName}}</h1>

<article>
    <P><strong>name:</strong> {{$name}}</P>
    <P><strong>email:</strong> {{$email}}</P>
    <P><strong>phone:</strong> {{$phone}}</P>
    <P><strong>languages:</strong> {{$language}}</P>

    <P>
        <strong>What skills do you have and what is your preferred medium?:</strong><br>
        {{$skills}}
    </P>
    <P><strong>Preferred Dates to use the space according to the Calendar:</strong><br>
        {{$dates}}
    </P>
    <P><strong>Further Comments:</strong><br>
        {{$comments}}
    </P>
</article>

</body>
</html>

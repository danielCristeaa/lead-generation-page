<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign up</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito';
            background-image: url("{{ asset('thanks-bg.svg') }}");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            background-color: #ffffff;
        }
        #logo {
            display: flex;
            justify-content: left;
            align-items: center;
        }
        #description {
            display: flex;
            flex-direction: column;
            width: 30vw;
        }
        #content {
            display: flex;
            justify-content: flex-start;
            padding: 1em;
            align-items: center;
        }
        #back {
            margin: 1em;
        }
    </style>
</head>

<body>
<div id="logo">
    <img src="{{asset("logo.png")}}">
</div>

<div id="content">
    <div id="description">
        <h3>Thank you for registering!</h3>
        <p>You will soon receive a confirmation email.</p>
    </div>
</div>

<button class="btn btn-dark" type="button" id="back" onclick="window.location='{{ url("/") }}'">Go back</button>
</body>
</html>

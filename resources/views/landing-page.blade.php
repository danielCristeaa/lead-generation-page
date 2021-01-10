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
                color: #cbd5e0;
                background-image: url("{{ asset('background.jpg') }}");
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                background-color: #ffffff;
            }
            #logo {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            #description {
                display: flex;
                flex-direction: column;
                width: 30vw;
            }
            #content {
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
            }
            #featured {
                margin-top: 5em;
            }
            #featured_headline {
                display: flex;
                justify-content: space-evenly;
            }
            #magazines {
                display: flex;
                justify-content: space-evenly;
            }
            p{
                font-size: 18px;
            }
        </style>
    </head>

    <body>
        <div id="logo">
            <img src="{{asset("logo.png")}}" height="160px" >
        </div>

        <div id="content">
            <div id="description">
                <h2>Register now!</h2>
                <p>We are growing our community!</p>
                <p>Take the first step on your journey on our website and subscribe to get access to website perks only available to our early subscribers!</p>
                <p>This is the start of something beautiful!</p>
            </div>

            <form id="form" action="{{url('add')}}" method="post">
                @csrf
                <h2>Sign up below</h2>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname" placeholder="First name">
                        @if ($errors->has('firstname'))
                            <span class="text-dark">{{ $errors->first('firstname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastname" placeholder="Last name">
                        @if ($errors->has('lastname'))
                            <span class="text-dark">{{ $errors->first('lastname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="text-dark">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="text-dark">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="termsandcond" autocomplete="off">
                        <label class="form-check-label" for="termsandcond">I aggree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-dark" id="submitform" disabled>Submit</button>
                </form>
            </form>
        </div>

        <div id="featured">
            <h2 id="featured_headline">As featured in</h2>
            <div id="magazines">
                <img src="{{asset("telegraph.png")}}" width="350vh" height="80vw">
                <img src="{{asset("wsj.png")}}" width="350vh" height="80vw">
                <img src="{{asset("wired.png")}}" width="200vh" height="90vw">
                <img src="{{asset("forbes.png")}}" width="200vh" height="80vw">
            </div>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/app.js"></script>
</html>

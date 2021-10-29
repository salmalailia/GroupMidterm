<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.google.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css?v=1.5') }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- NEW CSS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ URL::to('/') }}/images/logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('/') }}/images/logo.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ URL::to('/') }}/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <main>
        <div class="welcome-top">
            <img src="{{ URL::to('/') }}/images/logo.png" alt="logo">
            <h style="margin-left: 3vh;">Hello, Fellows!</h>
        </div>
        <div class="welcome">
            <div class="welcome-rectangle"></div>
            <div class="welcome-content">
                <h1><strong>Stackbelowflow</strong></h1>
                <hr>
                <p>Get lost? Feel free to ask anything here.</p>
                <div class="welcome-button">
                    <a class="button-welcome" href="{{ route('login') }}">Login</a>
                    <a class="button-welcome" href="{{ route('register') }}">Register</a>
                </div>
            </div>
            <div class="welcome-rectangle"></div>
        </div>
    </main>
    <script>
        var currentTitle = 'Welcome to Stackbelowflow!';
        document.title = 'Hello | ' + currentTitle;
    </script>
    <footer>
        <div class="copyright w-100">
            <center>&copy; 2021 Stackbelowflow. </center>
        </div>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
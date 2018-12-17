<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css')}}" />
        <script src="main.js"></script>

        <title> {{ config('app.name', 'Bangkal Elementary School - Main') }} </title>

        <!-- W3 SCHOOLS -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <!-- GOOGLE FONTS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link href='https://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet'>

        <!-- FONT AWESOME ICONS -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <style>
            .w3-lobster {
                font-family: "Poppins";
            }

            body {
                background-image: url('https://i.imgur.com/hbeWizm.jpg');
            }
            .padding {
                padding: 10px 10px 10px 10px;
            }
        </style>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            @yield('content')
        </div>
</html>
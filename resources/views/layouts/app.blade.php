<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOGChic - Banho & Tosa</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.2/fullcalendar.min.css" rel="stylesheet">

    {{--    <link rel="stylesheet" href="assets/material.min.css">
        <link rel="stylesheet" href="assets/styles.css">--}}

    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.2/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

</head>
<body>


{{--@include('partials.header')--}}
@include('partials.nav')

<div class="container">
    @yield('content')
</div>


{{--<script src="assets/material.min.js"></script>--}}
</body>
</html>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOGChic - Banho & Tosa</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.2/fullcalendar.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/app.css"/>

    <script src="../js/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.3.2/fullcalendar.min.js"></script>

    <script src="../js/materialize.min.js"></script>
    <script src="assets/script.js"></script>

</head>
<body>
<header>
    @include('partials.header')
    @include('partials.nav')
</header>
<div class="container">
    @yield('content')
</div>

</body>
</html>
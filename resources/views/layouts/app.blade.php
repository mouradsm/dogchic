<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOGChic - Banho & Tosa</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/material.min.css">
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>

<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    @include('partials.header')
    @include('partials.nav')

    <main class="mdl-layout__content mdl-color--grey-100">
        @yield('content')
    </main>

</div>


<script src="assets/material.min.js"></script>
</body>
</html>
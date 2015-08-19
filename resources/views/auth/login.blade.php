<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="container">

        <form method="POST" action="/auth/login" class="col s12 l12 ">
            {!! csrf_field() !!}
            <div class="row">
                <div class="input-field col s12 l4 m6 offset-m3 offset-l4">
                    <input id="email" type="text" name="username">
                    <label for="email">Usuário</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 l4 m6 offset-m3 offset-l4">
                    <input class="" type="password" name="password" id="password">
                    <label class="" for="password">Password</label>
                </div>
            </div>
            <div class="row left-align">
                <div class="col s12 l4 m6 offset-m3 offset-l4">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember"> Remember Me</label>
                </div>
            </div>
            <div class="row center-align">
                <div class="col s12 m6 l4 offset-m3 offset-l4">
                <button class="waver-effect waves-light btn" type="submit">Login</button>
                </div>
            </div>
        </form>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="../js/materialize.min.js"></script>

</body>
</html>


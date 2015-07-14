<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <link rel="stylesheet" href="../assets/material.min.css">
        <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
<div class="login-form mdl-grid">
  <form method="POST" action="/auth/login" class="mdl-cell mdl-cell--12-col">
      {!! csrf_field() !!}
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" id="email" type="email" name="email" value="{{ old('email') }}">
          <label class="mdl-textfield__label" for="email">Email</label>
      </div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="password" name="password" id="password">
          <label class="mdl-textfield__label" for="password">Password</label>
      </div>


      <div class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
          <input type="checkbox" name="remember" class="mdl-checkbox__input">
          <span class="mdl-checkbox__label"> Remember Me</span>
      </div>

       <div class="mdl-cell--2-col">
      <div class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-button-form">
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">Login</button>
      </div>
      </div>


  </form>
</div>
  <script src="../assets/material.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
</body>
</html>


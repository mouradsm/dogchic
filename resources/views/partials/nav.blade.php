{{--
<div class="mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
    <header class="demo-drawer-header">
        <img src="images/user.jpg" class="demo-avatar">
        <div class="demo-avatar-dropdown">
            <span>{{ Auth::user()->email }}</span>
            <div class="mdl-layout-spacer"></div>
--}}
{{--            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons">arrow_drop_down</i>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                <button class="mdl-menu__item">hello@email.com</button>
                <button class="mdl-menu__item">info@domain.net</button>
                <button class="mdl-menu__item">Add another account...</button>
            </ul>--}}{{--

        </div>
    </header>
    <nav class="mdl-navigation mdl-color--blue-grey-800">
        <a class="mdl-navigation__link" href="/"><i class="mdl-color-text--blue-grey-400 material-icons">home</i>Home</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">people</i>Clientes</a>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">contacts</i>Clubinhos</a>
        <a class="mdl-navigation__link" href="agenda"><i class="mdl-color-text--blue-grey-400 material-icons">event</i>Agenda</a>
--}}
{{--        <div class="mdl-layout-spacer"></div>
        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons">help_outline</i></a>--}}{{--

    </nav>
</div>--}}

<ul id="nav-mobile" class="side-nav fixed">
    <li class="logo"><a id="logo-container" href="http://materializecss.com/" class="brand-logo">
        <object id="front-page-logo" type="image/svg+xml" data="img/materialize.svg">Your browser does not support SVG</object></a></li>
    <li class="bold">
        <a href="#" class="waves-effect waves-teal">Agenda </a>
    </li>
    <li class="bold">
        <a href="#" class="waves-effect waves-teal">Clubinho</a>
    </li>
    <li class="bold">
        <a href="#" class="waves-effect waves-teal">Clientes</a>
    </li>
</ul>
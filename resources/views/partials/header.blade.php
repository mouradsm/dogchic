{{--
<header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
    <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">@yield('header')</span>
        <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" id="search" />
                <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
        </div>
        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
        </button>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
        </ul>
    </div>
</header>--}}
<div class="">
    <nav class="top-nav blue lighten-2">
        <div class="container">
            <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">DOGChic</a>
                {{--<ul class="right hide-on-med-down">
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Clubinhos</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{Auth::user()->name}}<i
                                    class="material-icons right">arrow_drop_down</i></a></li>
                </ul>--}}
            </div>
        </div>
    </nav>

</div>

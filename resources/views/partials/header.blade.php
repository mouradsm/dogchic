<div class="">
    <nav class="top-nav blue lighten-2">
        <div class="container">
            <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only"><i class="mdi-navigation-menu"></i></a>
            <div class="nav-wrapper">
                <spam class="brand-logo">@yield('title')</spam>
                <div class="right">
                    <form action="@yield('action')">
                            <div class="input-field">
                              <input id="search" type="search" required>
                              <label for="search"><i class="material-icons">search</i></label>
                              <i class="material-icons">close</i>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>


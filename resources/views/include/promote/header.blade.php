<nav class="fh5co-nav" role="navigation">
    <!-- <div class="top-menu"> -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center logo-wrap">
                <div id="fh5co-logo"><a href="index.html">Wedding Cafe<span>.</span></a></div>
            </div>
            <div class="col-xs-12 text-center menu-1 menu-wrap">
                <ul>
                    <li class="{{ Route::is('promote.index') ? 'active' : null }}">
                        <a href="{{ route('promote.index') }}">Home</a>
                    </li>
                    <li class="{{ Route::is('promote.menu') ? 'active' : null }}">
                        <a href="{{ route('promote.menu') }}">Menu</a>
                    </li>
                    <li class="{{ Route::is('promote.gallery') ? 'active' : null }}">
                        <a href="{{ route('promote.gallery') }}">Gallery</a>
                    </li>
                    <li class="">
                        <li class="{{ Route::is('promote.about') ? 'active' : null }}">
                        <a href="{{ route('promote.about') }}">About</a>
                    </li>
                    <li class="">
                        <li class="{{ Route::is('promote.contact') ? 'active' : null }}">
                        <a href="{{ route('promote.contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- </div> -->
</nav>

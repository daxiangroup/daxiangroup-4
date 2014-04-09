<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Daxian Group - Flatter</title>
        <meta name="description" content="">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {{ HTML::style('css/foundation.css') }}
        {{ HTML::style('css/dg.css') }}
        {{ HTML::style('css/NovaSquare.font.css') }}
        {{ HTML::style('css/Exo.font.css') }}
        {{ HTML::style('css/fontello.css') }}
        {{ HTML::script('js/vendor/modernizr.js') }}
    </head>
    <body class="{{ Request::path() }}">
        <div role="branding">
            
                <div class="row">
                    <div class="columns large-4 show-for-medium-up">
                        <ul>
                            <li{{ (isset($active_page) && $active_page == 'output') ? ' class="active"' : '' }}>
                                <a href="{{ URL::route('output') }}">Output</a>
                            </li>
                            <li{{ (isset($active_page) && $active_page == 'services') ? ' class="active"' : '' }}>
                                <a href="{{ URL::route('services') }}">Services</a>
                            </li>
                            <li{{ (isset($active_page) && $active_page == 'about') ? ' class="active"' : '' }}>
                                <a href="{{ URL::route('about') }}">About</a>
                            </li>
                        </ul>
                    </div>

                    <div class="columns large-4 middle">
                        <a href="{{ URL::route('home') }}">
                            <div class="words">daxian</div><div class="divider"></div><div class="words">group</div>
                        </a>
                    </div>

                    <div class="columns large-4 text-right show-for-medium-up">
                        <ul>
                            <li{{ (isset($active_page) && $active_page == 'contact') ? ' class="active"' : '' }}>
                                <a href="{{ URL::route('contact') }}">Get In Touch</a>
                            </li>
                        </li>
                    </div>
                </div>

        </div>

        <div role="main">
            @yield('content')
        </div>

        <footer role="main" id="footer" class="closed">
            <div class="tidbit">
                We would love to hear from you, {{ HTML::linkRoute('contact', 'let us know', array('feedback')) }} how we can improve.
            </div>

            <div class="left-side">
                <span>{{ HTML::link('terms', 'Terms') }}</span>
                <span>{{ HTML::link('conditions', 'Conditions') }}</span>
            </div>

            <div class="right-side">
                <span>&copy; 2014 Daxian Group</span>
            </div>
        </footer>

        {{ HTML::script('js/vendor/jquery-1.9.1.min.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}
        {{ HTML::script('js/plugins.js') }}
        {{ HTML::script('js/main.js') }}

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>

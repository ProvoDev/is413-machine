<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BYU IS Calculator</title>

        <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Montserrat" rel="stylesheet">

    </head>
    <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    {{--<div class="navbar-fixed">--}}
        {{--<nav class="grey darken-2  white-text">--}}
            {{--<div class="nav-wrapper">--}}
                {{--<a class="brand-logo">Wolfpack Software International</a>--}}
                {{--<ul class="right hide-on-med-and-down">--}}
                    {{--<li><a href="sass.html"></a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</nav>--}}
    {{--</div>--}}

    @yield('body')

    <footer class="page-footer grey darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">BYU Information Systems</h5>
                    <p class="grey-text text-lighten-4">Wolfpack Software International &copy</p>
                </div>
                {{--<div class="col l4 offset-l2 s12">--}}
                    {{--<h5 class="white-text">Links</h5>--}}
                    {{--<ul>--}}
                        {{--<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>--}}
                        {{--<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>--}}
                        {{--<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>--}}
                        {{--<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2016 Mitch & Associates LLC Inc.
                <a class="grey-text text-lighten-4 right" href="#top-typed">Top</a>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Internal Lojistic - {{ ucfirst(App\Helpers\Swiss::getCurrentSlug()) }}</title>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#164260"/>
    <meta name="msapplication-navbutton-color" content="#164260" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="nofollow" href="https://plus.google.com/104242186661397386656" rel="publisher" />
    <!--  favicons  -->
    <link rel="icon" type="image/png" rel="nofollow" href="/favicon.png" />
    <link rel="shortcut icon" type="image/png" rel="nofollow" href="/favicon.png" />
    <!--  libraries  -->
    {!! Html::style('/css/fonts.css?v='.v()) !!}
    {!! Html::style('/css/lojistic.css?v='.v()) !!}
    @yield('styles')
</head>
<body>
<!-- start nav -->
@include('parts.snippets.define-logo-svg')

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @include('parts.snippets.logo-svg', ["width" => '248'])
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a rel="nofollow" href="#">
                    @section('page-title')
                        Internal Pages
                    @show
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a rel="nofollow" href="/internal/audisee">Audisee</a> </li>
                <li><a rel="nofollow" href="/internal/intelliship">Intelliship</a></li>
                <li class="dropdown">
                    <a rel="nofollow" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Calculators <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a rel="nofollow" href="/internal/calculators">All</a></li>
                        <li><a rel="nofollow" href="/internal/calculators/rate-calculator">Rate Calculator</a></li>
                        <li><a rel="nofollow" href="/internal/calculators/rate-comparison-calculator">Rate Comparison Calculator</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a rel="nofollow" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Web Components <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a rel="nofollow" href="/internal/components">Modular Components</a></li>
                        <li><a rel="nofollow" href="/internal/components/elojis">Eloji Icons</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<!-- end nav -->
@yield('content')

{!! Html::script('//code.jquery.com/jquery-1.11.3.min.js')  !!}
{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')  !!}
@yield('scripts')
@include('parts.footer')
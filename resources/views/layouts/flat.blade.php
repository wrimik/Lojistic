<!DOCTYPE html>
<html>
<head>
    @section('meta')
    <title>{{ App\Helpers\Swiss::titleFromPath() }}</title>
    <!--  meta  -->
    <meta name="description" content="{{ App\Helpers\Swiss::titleFromPath() }}" />
    <meta name="keywords" content="{{ App\Helpers\Swiss::titleFromPath(true) }}" />
    @show

    @if(!env('APP_PRODUCTION'))
        <meta name="robots" content="noindex, nofollow"/>
    @endif
            <!--
                             _______   _           _ _     _   _
                            |  ___  | | |         (_|_)   | | (_)
                            | |   | | | |     ___  _ _ ___| |_ _  ___
                            | |   | | | |    / _ \| | / __| __| |/ __|
                            | |   | | | |___| (_) | | \__ \ |_| | (__
                            |\|___| | \_____/\___/| |_|___/\__|_|\___|
                            \_____|_|            _/ |
                                                |__/
                            hey. we're hiring developers. send your resume/portfolio to careers@lojistic.com
            -->

    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name="theme-color" content="#164260"/>
    <meta name="msapplication-navbutton-color" content="#164260" />
    <meta name="google-site-verification" content="eBYNXDV6ZHulQJJkGqz9w_aSKqu1zgBreW7OqiTGU9Y" />
    <meta name="msvalidate.01" content="151CF70A3ADC6AE6546B13B38C93FE5C" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="nofollow" href="https://plus.google.com/104242186661397386656" rel="publisher" />
<!--  favicons  -->
    <link rel="icon" type="image/png" rel="nofollow" href="/favicon.png" />
    <link rel="shortcut icon" type="image/png" rel="nofollow" href="/favicon.png" />
<!--  libraries  -->
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')  !!}
    {!! Html::style('/css/fonts.css?v='.v())  !!}
    {!! Html::style('/css/lojistic.css?v='.v())  !!}
    @yield('styles')
<!--  styles  -->
</head>
<body>
@include('parts.snippets.define-logo-svg')
@include('parts.nav')
<!-- page content begin -->
@yield('content')
<!-- page content end -->
{{--<iframe src="https://www.linkedin.com/in/source-consulting-9bb39641?authToken=zRgB&authType=name&" height="1" width="1" style="z-index:0;position:absolute;" frameBorder="0"></iframe>--}}
{{--<iframe src="https://www.linkedin.com/profile/view?id=AAkAAAjG-x8BdPVeAFHqYtGq6v_9aYfWhxHbaPc&authType=NAME_SEARCH&authToken=U2qS&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A147258143%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1453415207405%2Ctas%3Asource&authType=name&" height="1" width="1" style="z-index:0;position:absolute;" frameBorder="0"></iframe>--}}
{{--<iframe src="https://www.linkedin.com/profile/view?id=AAkAAAjG-x8BdPVeAFHqYtGq6v_9aYfWhxHbaPc&authType=NAME_SEARCH&authToken=U2qS&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A147258143%2CauthType%3ANAME_SEARCH%2Cidx%3A2-1-2%2CtarId%3A1453502917825%2Ctas%3Asource%20consultin" height="1" width="1" style="z-index:0;position:absolute;" frameBorder="0"></iframe>--}}
@include('parts.footer')
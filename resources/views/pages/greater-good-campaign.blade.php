@extends('layouts.flat')
@section('content')
    <section class="banner navy">
        <div class="container">
            <div class="col-sm-3 col-xs-12">
                <i class="fs-150 white eloji-greater-good"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Greater Good Campaign</h1>
            </div>
        </div>
    </section>
    <div id='video-container'>
        <div class="flex-video">
            <iframe id="youtube_player" width="768" height="432"
                    src="https://www.youtube.com/embed/L5fnjjYuomc?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0"
                    frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <section class="white">
        <div class="container">
            <article>
                <h2>GIVING BACK TO THE COMMUNITY</h2>

                <p>At Lojistic, we hold a high standard for corporate and community responsibility. We are a for profit
                    company trying to make an impact in the nonprofit sector. As a part of our corporate Greater Good
                    Campaign, our team (plus friends, family, customers, and other willing volunteers) dedicates two
                    normal workdays each year to volunteer and help alongside organizations working for the 'greater
                    good'. We call these volunteer days: Greater Good Service Days.
                </p>
            </article>
        </div>
    </section>

@stop
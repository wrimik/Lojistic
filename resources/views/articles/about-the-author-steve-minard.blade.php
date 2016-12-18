@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'About The Author Steve Minard - Lojistic',
        'description' => 'About The Author Steve Minard.',
        'keywords' => '',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <article>
                <h2>Author Bio</h2>

                <h3>Steve Minard</h3>
                <img style='display:block;float:left;margin:0 25px 25px 0' src="/images/steve_minard_author.png"
                     alt="Steve Minard"/>

                <p>
                    Steve Minard is the current Content Manager for Lojistic. He is tasked
                    with disseminating the most up-to-date and informative content that
                    Lojistic has to offer. His former sales and operations experience coupled
                    with a B.S. degree in Marketing from the University of Colorado Leeds School
                    of Business have contributed to his success in this role.
                </p>
                <p>Steve lives in Costa Mesa with his fiancée and enjoys shaping surfboards,
                    surfing, and cruising in his classic Volkswagen.
                </p>

                <br/>
                <p>
                    <a rel="nofollow" href="https://plus.google.com/u/0/108627736862856648908/about" rel="me" target="blank">Google+</a>
                </p>
            </article>
        </div>
    </section>
@stop
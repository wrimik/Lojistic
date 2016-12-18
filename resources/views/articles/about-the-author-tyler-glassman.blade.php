@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'About The Author Tyler Glassman - Lojistic',
        'description' => 'About The Author Tyler Glassman.',
        'keywords' => '',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <article>
                <h2>Author Bio</h2>

                <h3>Tyler Glassman, MBA</h3>
                <img style='display:block;float:left;margin:0 25px 25px 0' src="/images/Tyler_Glassman.png"
                     alt="Tyler Glassman"/>

                <p>Tyler Glassman has worked in the transportation industry for more than twenty years. Sales,
                    management, pricing, consulting, and technology roles have equipped Mr. Glassman with a wealth of
                    experience. His knowledge has been distributed through a variety of platforms including, industry
                    periodicals, public speaking engagements, and a variety of online resources.</p>

                <p>Mr. Glassman currently resides in Orange County California and is working on a reference manual of
                    "all things logistics". Lojistic is honored to feature Mr. Glassman as an extended part of their
                    team of experts.</p>
                <br/>

                <p>
                    <a rel="nofollow" href="https://plus.google.com/107151318666195398103" rel="me" target="blank">Google+</a>
                </p>
            </article>
        </div>
    </section>
@stop
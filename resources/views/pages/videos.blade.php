@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Videos - Lojistic',
        'description' => 'Late Shipments Suck',
        'keywords'    => '',
    ])
@overwrite
@section('styles')
    {!! Html::style('css/pages/odometer-theme-minimal.css?v='.v()) !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')  !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/fancybox_overlay.png')  !!}
    {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.css')  !!}
@stop
@section('scripts')
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js')  !!}
    {!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.js')  !!}
    <script type="text/javascript">
        initVideos();
    </script>
@stop
@section('content')

    <section class="sm-banner brightBlue">
        <div class="container">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <img src="/images/lojistic-tube.png" alt="LOJISTIC VIDEOS">
            </div>
            <div class=" col-lg-7 col-md-7 hidden-xs hidden-sm">
                <div id="roller" class="textroller pull-right">#lateShipmentsSuck</div>
            </div>
        </div>
    </section>

    <section class="white small-padding">
        <div class="container" id="logistic-video">
            <div class="video-section-spacing">
                <div class="col-sm-12 col-lg-9">
                    <div class="row">
                        <div class="main-video-area">
                            <div id="app">
                                <div class="flex-video">
                                    <iframe id="youtube_player" width="768" height="432" v-bind:src="first.video"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="social-bar">
                                    <div class="col-xs-3 np">
                                        <a class="btn btn-lg social-share-button brightBlue "
                                           href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flojisic.com/videos"
                                           target="_blank"
                                           style="border-radius:0px;">
                                            <i class="eloji-facebook"></i> <span class="hidden-xs"> facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-3 np">
                                        <a class="btn btn-lg social-share-button accentLightBlue"
                                           href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwww.lojistic.com%2Fvideos&via=LojisticUSA"
                                           target="_blank"
                                           style="border-radius:0px;">
                                            <i class="eloji-twitter white"></i><span
                                                    class="white hidden-xs"> twitter </span>
                                        </a>
                                    </div>
                                    <div class="col-xs-3 np">
                                        <a class="btn btn-lg social-share-button red"
                                           href="https://plus.google.com/share?url=https%3A%2F%2Fwww.lojistic.com%2Fvideos"
                                           target="_blank"
                                           style="border-radius:0px;">
                                            <i class="eloji-google-plus"></i><span class="hidden-xs"> Google+</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-3 np">
                                        <a class="btn btn-lg social-share-button brightBlue"
                                           href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.lojistic.com%2Fvideos"
                                           target="_blank"
                                           style="border-radius:0px;">
                                            <i class="eloji-linkedin"></i><span class="hidden-xs"> linked In</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row paleBlue hidden-xs hidden-sm">
                        <div class="call-to-action-video">
                            <div class="col-sm-3 text-center">
                                <i class="eloji-piggybank fs-150 orange"></i>
                            </div>
                            <div class="col-sm-9">
                                <p class="brightBlue">Sick of late shipments? Let the smart folks at Lojistic show you
                                    how you can get refunded for the cost of your late shipments with a parcel audit.
                            </div>
                            </p>
                            <div class="col-xs-12 col-sm-8">
                                <a href="/parcel-freight-bill-audit" class="btn btn-primary pull-right">Learn More About
                                    Parcel Audit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 hidden-xs hidden-sm hidden-md">
                <div class="video-spacing-sidebar card-shadow text-center fadeIn animated" v-for="video in videos"
                     v-on:click="setMainVideo($index)" v-cloak>
                    <h4 class="card-title brightBlue">@{{ video.text }}</h4>
                    <img v-bind:src="video.img" onmouseover="" style="cursor: pointer;"/>
                </div>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container text-center">
            <h1>Grab Some Popcorn...</h1>

            <div id="videoGallery">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 overlay col-centered" v-for="item in items">
                        <div class="video-spacing video-card text-center card-shadow" v-cloak>
                            <h4 class="card-title brightBlue">@{{ item.text }}</h4>
                            <a class="various fancybox fancybox.iframe" v-bind:href="item.video">
                                <img v-bind:src="item.img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    @include('parts.20-20-leadin')

@stop
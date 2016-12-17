@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Parcèl Lebox', // also update in js below
        'description'   => 'I am Parcèl Lebox.  Follow me on my adventures',
        'keywords'  => 'Parcèl Lebox, Parcèl Lebox, Parcel'
    ])
@overwrite
@section('styles')
    {!! Html::style('css/pages/parcel.css?'.v())  !!}
@stop
@section('content')
    <script>
        history.pushState("accent", 'Parcèl Lebox', 'parcèl');
    </script>
    <section class="parcel-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="white">
                        <a class="no-decoration js-parcel-video" data-load="/video-files/parcel/box-low" href="#">
                        Meet Parcèl Lebox <i class="fa fa-play-circle-o"></i>
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="parcel-grid">
            <div class="grid-sizer"></div>
            <div class="grid-item grid-item--width2 grid-item--height2 no-height-xs">
                <div class="text-box silver">
                    <h3>
                        <strong>
                            Hello world, I’m Parcèl.
                        </strong>
                    </h3>

                    <p>
                        I know this may sound strange, but I’m a box.
                        Always have been.
                    </p>
                    <p>
                    I work in transportation (ironic, right?) and my job has taken me all over the world, bringing
                        people gifts, school supplies, whatever, really.
                    </p>
                    <p>
                        Through my travels I’ve met a lot of people, made even more memories, and had a lot of fun.
                    </p>

                    <p>
                        The mesdames et messieurs at Lojistic gave me this part of their site, so
                        I figured I’d share some of the things I’ve done along the way.
                    </p>
                </div>
            </div>
            <div class="grid-item"><img src="{{ asset('images/parcel/p1.jpg') }}" alt="Parcel 1" height="250"
                                        width="250" class="img-responsive"></div>
            <div class="grid-item overlay">
                <div class="image-container">
                    <img src="{{ asset('images/parcel/p14.jpg') }}" alt="Parcel 2" height="250" width="250"
                         class="img-responsive">

                    <div class="overlay-card">
                        Adventurer
                    </div>
                </div>
            </div>
            <div class="grid-item overlay">
                <div class="image-container">
                    <img src="{{ asset('images/parcel/p3.jpg') }}" alt="Parcel 3" height="250" width="250"
                         class="img-responsive">

                    <div class="overlay-card">
                        Sojourner
                    </div>
                </div>
            </div>
            <div class="grid-item grid-item--height2">
                <img width="250" height="510" src="{{ asset('images/parcel/p1-2h.jpg') }}" alt="Parcel 4"
                     class="img-responsive">
            </div>
            <div class="grid-item visible-xs">
                <img src="{{ asset('images/parcel/p5.jpg') }}" height="250" width="250" alt="Parcel 5"
                     class="img-responsive">
            </div>
            <div class="grid-item grid-item--width2 hidden-xs">
                <div class="image-container">
                    <video autoplay loop muted class="full-width">
                        <source src="{{ asset('images/parcel/bus_lapse.mp4') }}" type="video/mp4">
                        <source src="{{ asset('images/parcel/bus_lapse.ogv') }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="grid-item">
                <img src="{{ asset('images/parcel/p7.jpg') }}" alt="Parcel 7" height="250" width="250"
                     class="img-responsive">
            </div>
            <div class="grid-item overlay">
                <div class="image-container">
                    <img src="{{ asset('images/parcel/p15.jpg') }}" alt="Parcel 5" height="250" width="250"
                         class="img-responsive">

                    <div class="overlay-card">
                        Philosopher
                    </div>
                </div>
            </div>
            <div class="grid-item"><img src="{{ asset('images/parcel/p6.jpg') }}" alt="Parcel 6" height="250"
                                        width="250" class="img-responsive"></div>
            <div class="grid-item"><img src="{{ asset('images/parcel/p10.jpg') }}" alt="Parcel 10" height="250"
                                        width="250" class="img-responsive"></div>
            <div class="grid-item overlay">
                <div class="image-container">
                    <img src="{{ asset('images/parcel/p11.jpg') }}" alt="Parcel 11" height="250" width="250"
                         class="img-responsive">

                    <div class="overlay-card">
                        Friend
                    </div>
                </div>
            </div>
            <div class="grid-item grid-item--height2"><img src="{{ asset('images/parcel/p2-2h.jpg') }}" alt="Parcel 12"
                                                           height="510" width="250" class="img-responsive"></div>
            <div class="grid-item visible-xs"><img src="{{ asset('images/parcel/p16.jpg') }}" alt="Parcel 16"
                                                   height="250" width="250" class="img-responsive"></div>
            <div class="grid-item grid-item--height2 grid-item--width3 hidden-xs">
                <div class="image-container">
                    <video autoplay loop muted height="770">
                        <source src="{{ asset('images/parcel/parcel_beach.mp4') }}" type="video/mp4">
                        <source src="{{ asset('images/parcel/parcel_beach.ogv') }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="grid-item"><img src="{{ asset('images/parcel/p12.jpg') }}" alt="Parcel 13" height="250"
                                        width="250" class="img-responsive"></div>
            <div class="grid-item overlay">
                <div class="image-container">
                    <img src="{{ asset('images/parcel/p13.jpg') }}" alt="Parcel 14" height="250" width="250"
                         class="img-responsive">

                    <div class="overlay-card">
                        Companion
                    </div>
                </div>
            </div>
            <div class="grid-item"><img src="{{ asset('images/parcel/p2.jpg') }}" alt="Parcel 15" height="250"
                                        width="250" class="img-responsive"></div>
            <div class="grid-item overlay">
                <div class="image-container">
                    <img src="{{ asset('images/parcel/p4.jpg') }}" alt="Parcel 16" height="250" width="250"
                         class="img-responsive">

                    <div class="overlay-card">
                        Box
                    </div>
                </div>
            </div>
            <div class="grid-item grid-item--width4">
                <div class="parcel-footer">
                    <img src="{{ asset('/images/parcel/parcel_footer.jpg') }}" alt="Join Parcèl" height="250"
                         width="1030">
                    <a class="no-decoration js-parcel-video" data-load="/video-files/parcel/pov-lojistic" href="#">
                        <h1 class="white text-center">Join Me On My Adventure
                            <i class="fa fa-play-circle-o"></i>
                        </h1>
                    </a>
                </div>
            </div>
            <div class="grid-item text-center">
                <a href="https://youtube.com/lojistic" target="_blank" class="no-decoration">
                    <div class="social youtube">
                        <i class="fa fa-youtube"></i>
                    </div>
                </a>
            </div>
            <div class="grid-item text-center">
                <a href="https://twitter.com/parcellebox" target="_blank" class="no-decoration">
                    <div class="social twitter">
                        <i class="fa fa-twitter"></i>
                    </div>
                </a>
            </div>
            <div class="grid-item text-center">
                <a href="https://www.facebook.com/ParcelLebox" target="_blank" class="no-decoration">
                    <div class="social facebook">
                        <i class="fa fa-facebook"></i>
                    </div>
                </a>
            </div>
            <div class="grid-item text-center">
                <a href="https://instagram.com/parcellebox" target="_blank" class="no-decoration">
                    <div class="social instagram">
                        <i class="fa fa-instagram"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Video Modal -->
    <div class="modal fade" id="parcel-modal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <div class="video-wrapper"></div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div><!-- /.modal -->

@stop
@section('scripts')
    {!! Html::script('/js/2016/misc/masonry.pkgd.min.js')  !!}
    <script>
        $(document).ready(function(){
            //Play videos when we click to play!
            $('.js-parcel-video').click(function(e){
                e.preventDefault();
                e.stopPropagation();
                var modal = $('#parcel-modal');
                var file = $(this).attr('data-load');
                var vid = document.createElement('video');
                var mp4 = '<source src="'+file+'.mp4" type="video/mp4">';
                var ogg = '<source src="'+file+'.ogv" type="video/ogv">';
                $(vid).attr('autoplay',true);
                $(vid).attr('controls',true);
                $(vid).html(mp4+ogg);
                $('.video-wrapper').html(vid);
                modal.modal();
            });
            $('#parcel-modal').on('hidden.bs.modal', function (e) {
                $(this).find('video').get(0).pause();
            })
        });
        $(window).load(function () {
            $('.parcel-grid').masonry({
                columnWidth: '.grid-sizer',
                itemSelector: '.grid-item',
                percentPosition: true
            });
        });
    </script>
@stop
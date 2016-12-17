@extends('layouts.flat')
@section('styles')
    {!!  Html::style('/css/pages/blog.css?v='.v())  !!}
@stop
@section('scripts')
    <script>
        blogInit();
        buildSocialMediaLinks();
    </script>
@stop
@section('content')
    <section id="blog">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                <div class="circ circ-80 hover-color-opacity text-center brightBlue" style="border:#ffffff 1px solid;">
                    <i class="eloji eloji-email text-vc fs-32 white"></i>
                </div>
                <h3 class="text-center brightBlue post-title">Sign Up Today For Our Newsletter</h3>
                </h3>
                <div class="col-lg-6 col-lg-offset-4 col-sm-8 col-sm-offset-3">
                    <div class="scroll-footer-form form-inline">
                        <br>
                        <input id="sticky-footer-email" name="hs[email]" class="form-control" placeholder="*email" data-parsley-type="email" required data-parsley-id="10">
                        <a id="sticky-footer-btn" class="btn btn-primary btn-sm modal-btn"
                           data-modal-title="Thank You!"
                           data-modal-body="#my-modal-body">Subscribe</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1"><br>
            <h3 class="text-center">We put out articles 2-3 times a month.<br> We promise No Spam EVER.</h3>
            </div>
        </div>
    </section>
    @include('parts.blog.sticky-footer')
    <div id="my-modal-body" class="hidden">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                <div class="circ circ-80 hover-color-opacity text-center brightBlue" style="border:#ffffff 1px solid;">
                    <i class="eloji eloji-email text-vc fs-32 white"></i>
                </div>
                <h3 class="text-center brightBlue post-title uppercase">Thank You!! <br> for signing up For Our Newsletter</h3>
            </div>
        </div>
    </div>
    @include('parts.modal')

@stop

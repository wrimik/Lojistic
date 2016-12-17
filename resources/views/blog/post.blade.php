@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
    'title'       => $title,
    'description' => $description,
    'keywords'    => $keywords,
    ])
@overwrite
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

    <div class="hero-container">
        <div id="animate2" class="hero-image" style="background-image: url('{!! $image or '/images/bookcrop.jpg' !!}');">
            <!-- soon to be included -->
            {{--$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));--}}
            <h1 id="hero-title" class="text-vc text-center hero-title entry-title">{!! $post->post_title  !!}<br><br>
                <small>@include('parts.blog.author')</small></h1>
        </div>
    </div>

    <section id="blog">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2  col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                <h3 class="text-center brightBlue post-title">{!! $post->post_title  !!}<br>
                    <small><br>@include('parts.blog.author')</small>
                </h3>
                <br>
                <article>
                    {!! str_replace('/blog/wp-content/uploads/', '/wp-content/uploads/', $post->post_content)  !!}
                </article>
            </div>
        </div>
    </section>

    @include('parts.blog.sticky-footer')

@stop

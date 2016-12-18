@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
    'title'       => $title,
    'description' => $description,
    'keywords'    => 'parcel audit, Lojistic, parcel contracts, parcel auditing, parcel audit services, parcel auditing companies, parcel audit companies, freight audit, Lojistic, freight contracts, freight auditing, freight audit services, freight auditing companies, freight audit companies'
    ])
@overwrite
@section('styles')
    {!!  Html::style('/css/pages/blog.css?v='.v())  !!}
    @if(count(Request::segments())!= 1)
        {{--<meta name="robots" content="noindex, follow" />--}}
    @endif
    @if($pagination['prev'] != '#')
        <link rel="prev" rel="nofollow" href="{{ $pagination['prev'] }}"/>
    @endif
    @if($pagination['next'] != '#')
        <link rel="next" rel="nofollow" href="{{ $pagination['next'] }}"/>
    @endif
@stop
@section('scripts')
    <script>
        blogInit();
        buildSocialMediaLinks();
    </script>
@stop
@section('content')
    <div class="hero-container">
        <div id="animate2" class="hero-image">
            <!-- soon to be included -->
            {{--$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));--}}
            <h1 id="hero-title" class="text-vc text-center hero-title entry-title">Lojistic Blog<br>
            <small class="hidden-sm hidden-xs">Fill Your Noggin With Current Logistics News.</small></h1>
        </div>
    </div>

    <section id="blog">
        <div class="container">
            <div class="col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">
                @foreach ($blogContent as $post)
                    <div class="col-lg-2">
                        <div class="blog-date-border pull-right hidden-md hidden-sm hidden-xs">
                            <h3 class="uppercase blog-date">
                                <span class="flatBlue blog-date-month">{{ date('M d ', strtotime($post->post_date)) }}</span> <br>
                                <span class="flatBlue blog-date-year">{{ date('Y', strtotime($post->post_date)) }}</span>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div id="post-{{ $post->ID }}" class="post type-post status-publish format-standard hentry">
                            <h3 class="entry-title ">
                                <a rel="nofollow" href="/blog/{{ $post->post_name }}" title="Permalink to {{ $post->post_title }}"
                                   rel="bookmark" class="entry-title">
                                    {!! $post->post_title !!}
                                </a>
                            </h3>
                            <div class="entry-content blog-teaser">
                                <p>
                                    {!! strip_tags(substr($post->post_content, 0, 400))  !!}...
                                </p>

                                <p class="continue-reading">
                                         <span class="author vcard">

                                                 <a class="pull-right" rel="nofollow" href="/blog/{{ $post->post_name }}">Continue Reading...</a>
                                            @if($post->post_author == 10)
                                                 <a class="url fn n" rel="nofollow" href="/about-the-author-steve-minard"
                                                   title="View all posts by Steve Minard"
                                                   rel="nofollow">
                                                    By: Steve M.
                                                </a>
                                            @elseif($post->post_author == 5)
                                                 <a class="url fn n" rel="nofollow" href="/blog/author/tylerg/" title="View all posts by tylerg"
                                                   rel="nofollow">
                                                    By: TylerG
                                                </a>
                                            @else
                                                 <br>
                                            @endif
                                            </span>

                                </p>
                            </div>
                            <!-- .entry-content -->
                        </div>
                    <hr class="slim">
                    </div>




                @endforeach
            </div>

            <!-- end blog posts -->


            @if(!Request::is('blog/category/*'))
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-3">
                        <nav>
                            <ul class="pagination pagination-lg">
                                <li {{$pagination['prev'] == '#' ? 'class="disabled"':''}}>
                                    <a rel="nofollow" href="{{ $pagination['prev'] }}" aria-label="Previous">
                                        <span aria-hidden="true">Prev</span>
                                    </a>
                                </li>
                                @if($pagination['page'] > 5)
                                    <li><a rel="nofollow" href="{{ url('blog/page/1') }}">1</a></li>
                                    <li class="disabled"><a rel="nofollow" href="#">...</a></li>
                                @endif
                                @if($pagination['page'] > 3)
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']-3) ) }}">{{$pagination['page']-3}}</a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']-2) ) }}">{{$pagination['page']-2}}</a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']-1) ) }}">{{$pagination['page']-1}}</a>
                                    </li>
                                @elseif($pagination['page'] > 2)
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']-2) ) }}">{{$pagination['page']-2}}</a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']-1) ) }}">{{$pagination['page']-1}}</a>
                                    </li>
                                @elseif($pagination['page'] > 1)
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']-1) ) }}">{{$pagination['page']-1}}</a>
                                    </li>
                                @endif
                                <li><a rel="nofollow" href="#">{{$pagination['page']}}</a></li>
                                <!-- was class="active" -->
                                @if($pagination['pagesLeft'] > 3)
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+1) ) }}">{{$pagination['page']+1}}</a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+2) ) }}">{{$pagination['page']+2}}</a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+3) ) }}">{{$pagination['page']+3}}</a>
                                    </li>
                                @elseif($pagination['pagesLeft'] > 2)
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+1) ) }}">{{$pagination['page']+1}}</a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+2) ) }}">{{$pagination['page']+2}}</a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+3) ) }}">{{$pagination['page']+3}}</a>
                                    </li>
                                @elseif($pagination['pagesLeft'] > 1)
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+1) ) }}">{{$pagination['page']+1}}</a>
                                    </li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+2) ) }}">{{$pagination['page']+2}}</a>
                                    </li>
                                @elseif($pagination['pagesLeft'] > 0)
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['page']+1) ) }}">{{$pagination['page']+1}}</a>
                                    </li>
                                @endif
                                @if($pagination['pagesLeft'] > 4)
                                    <li class="disabled"><a rel="nofollow" href="#">...</a></li>
                                    <li>
                                        <a rel="nofollow" href="{{ url('blog/page/'.($pagination['totalPages']) ) }}">{{$pagination['totalPages']}}</a>
                                    </li>
                                @endif
                                <li {{ $pagination['next'] == '#' ? 'class="disabled"' : '' }}>
                                    <a rel="nofollow" href="{{ $pagination['next'] }}" aria-label="Next">
                                        <span aria-hidden="true">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            @endif
        </div>
    </section>
    @include('parts.blog.sticky-footer')

    <div id="my-modal-body" class="hidden">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
                <div class="circ circ-80 hover-color-opacity text-center brightBlue" style="border:#ffffff 1px solid; padding-top:25px;">
                    <i class="eloji eloji-email fs-32 white"></i>
                </div>
                <h3 class="text-center brightBlue post-title uppercase">
                    Thank You!!<br>
                    for signing up For Our Newsletter<br>
                    <small>the good stuff will be heading your way super dooper soon</small>
                </h3>
            </div>
        </div>
    </div>
    @include('parts.modal')
@stop

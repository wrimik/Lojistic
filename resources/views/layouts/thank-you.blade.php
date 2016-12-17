@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => $title,
        'description' => $description,
        'keywords'    => $keywords,
    ])
@overwrite
@section('scripts')
    <script type='text/javascript'>
        $(document).ready(function () {
            download();
        });
    </script>
@stop
@section('content')
    <section class="white">
        <div class="container">
            <article>
                <h2>{{ $heading }}</h2>
                <p class="text-center">
                    {{ $message }}
                </p>
                @if(isset($bigImage))
                    <img width="600" src="{{ $bigImage }}">
                @endif
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                        <a href="{{ $btnUrl }}" class="btn {{ $btnType or 'btn-success' }} btn-thick" {{ $btnAttr or ''}}>
                            @if(isset($btnFaIconClass))
                                <i class="fa {{ $btnFaIconClass }}"></i>
                            @endif
                            {{ $btnTxt }}
                        </a>
                    </div>
                </div>
                <hr/>
                <p class="text-center">
                    To reach a member of our team immediately, call us: (800) 783-5753  or email us:
                    <a href="mailto:info@lojistic.com">info@lojistic.com</a>
                </p>
            </article>
        </div>
    </section>

    @include('parts.thank-you-related')
    @include('parts.20-20-leadin')

@stop
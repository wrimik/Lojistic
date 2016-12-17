@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Lojistic - Page Not Found',
        'description' => 'Lojistic - Page Not Found',
        'keywords'    => 'Lojistic - Page Not Found',
    ])
@overwrite
@section('content')
    <section>
        <article class="text-center">
            <h1>{{ $message['title'] }}</h1>
            <p>
                {{ $message['body'] }}
            </p>
        </article>
    </section>
@stop
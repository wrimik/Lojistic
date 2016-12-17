@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Lojistic - Page Not Found',
        'description' => 'Lojistic - Page Not Found',
        'keywords'    => 'Lojistic - Page Not Found',
    ])
@overwrite
@section('content')
<?php $message = \App\Helpers\NotFound::message(); ?>

    

    <section style="background: url('/images/404.jpg'); background-size:30%; background-repeat:repeat;">
        <div class="container">
            <h1 class="text-center brightBlue four-oh-four"><br>{{ $message['title']  }}<br>
                <small>{!! $message['body'] !!}</small>
            </h1>
        </div>
    </section>

    <section class="white ">
        <div class="container">
            <h3 class="text-center">
                If you are looking for something cool,
                <br> try our White Papers or Shipping Calculators...
                <br>&nbsp;
            </h3>
            @include('parts.post-it-white-paper')
            <hr class="white">
            @include('parts.post-it-calc')
        </div>
    </section>

@stop
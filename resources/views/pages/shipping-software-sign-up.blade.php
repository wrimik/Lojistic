@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Shipping Software Sign Up - Lojistic',
        'description' => 'Intelliship is a multi-carrier, web based shipping software which helps companies of all sizes get their shipping in order.',
        'keywords'    => 'Supply chain software, logistics software, transportation management software, tms software, transportation software, transportation management systems',
    ])
@overwrite
@section('scripts')
    {!!  Html::script('/js/2016/misc/intelliship-signup.js') !!}
@stop
@section('content')
        <section class="interview">
            <div class="col-sm-4 col-xs-12 green">
                <div class="interview-title tall-title col-xs-12">
                    @include('parts.is-signup.title-0')
                </div>
            </div>
            <div class="col-sm-8 steps silver">
                <form id="intelliship-signup">
                    @include('parts.is-signup.step-1')
                    @include('parts.is-signup.step-2')
                    @include('parts.is-signup.step-3')
                    @include('parts.is-signup.success')
                    @include('parts.is-signup.intelliship-terms')
                    @include('parts.modal')
                </form>
            </div>
        </section>
@stop

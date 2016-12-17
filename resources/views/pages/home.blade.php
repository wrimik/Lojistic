@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Parcel & Freight Audit Services - Shipping Contract Negotiation',
        'description' => 'Parcel & freight audit services, shipping carrier rate negotiation, transportation software, and more for our clients. We can help reduce your shipping costs.',
        'keywords' => 'parcel audit, freight audit, Lojistic, freight contracts, freight auditing, freight audit services, freight auditing companies, freight audit companies',
    ])
@overwrite
@section('scripts')
    <script>
        // removes video for mobile and Edge browsers
        if(navigator.userAgent.indexOf('Edge') != -1 || screen.width < 700){
            $('.utah').addClass('novideo').find('video').remove();
        }
    </script>
@stop
@section('content')
    @include('parts.home.journey')
    @include('parts.home.b-list') {{-- this has a sass/snippets/_b-list.scss file that can be removed once this is gone --}}
    @include('parts.20-20-leadin')
{{--    @include('parts.home.send-costs-packing')--}}
{{--    @include('parts.home.holiday')  --}}
{{--    @include('parts.home.popular')  --}}
{{--    @include('parts.home.product-pogs')--}}
{{--    @include('parts.home.news') --}}
{{--    @include('parts.home.tools-n-stuff')    --}}
            <!--  ----------   Product Info Sections   ----------  -->
    @include('parts.home.parcel-audit')
    @include('parts.home.negotiation')
    @include('parts.home.test-audit-lead-in')
    @include('parts.home.freight-management')
    @include('parts.home.insurance')
    @include('parts.home.intelliship')
    @include('parts.home.halo')
    @include('parts.home.calculators')
    @include('parts.test-audit.preview')
@stop
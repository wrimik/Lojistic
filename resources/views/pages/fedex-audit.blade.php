@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'FedEx Audit - Lojistic',
        'description' => 'Our FedEx audit onboarding process is quick and painless, so you will be seeing your small parcel audit credits almost instantly',
        'keywords' => 'fedex audit, parcel audit, ups audit, shipping audit, small parcel audit',
    ])
@overwrite
@section('scripts')
    {{--{{ HTML::script('/js/calcs.js') }}--}}
{{--    {{ HTML::script('/js/2015/image-viewer.js') }}--}}
@stop
@section('content')
    <section class="banner navy">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-paper-audit"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">FedEx Audit</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <article>
                <p>
                    A FedEx audit will no doubt lower your transportation costs and can help identify other potential
                    saving opportunities. And while most parcel audits are very similar, there are some subtle
                    differences between a <a rel="nofollow" href="/parcel-audit/ups-audit">UPS audit</a> and a FedEx audit.
                    Thankfully, no matter what carrier you employ, Lojistic has you covered.
                </p>

                <p>
                    The main way that a Fedex audit will differ from a UPS audit is in regards to how the
                    parcel audit credits are posted. A FedEx audit can be treated as a
                    pre-audit, in that the shipping audit will be performed and credits applied prior to paying each
                    audited invoice. With a UPS audit, your shipping audit credits will be applied to a future invoice.
                </p>

                <p>
                    Another difference between a FedEx audit and a UPS audit is that Lojistic is only able to post audit
                    UPS invoices. With a UPS audit, we are able to post-audit up to 6 months of data. Regardless of this
                    difference, implementing a <a rel="nofollow" href="/parcel-audit">small parcel audit</a> is a great way to reduce costs and streamline your
                    overall transportation operations.
                </p>

                <p>
                    Our FedEx audit onboarding process is quick and painless, so you will be seeing your small parcel
                    audit credits almost instantly, one of the main benefits of a FedEx audit. No matter your carrier
                    mix, implementing a small parcel audit is a no-brainer.
                </p>
            </article>
        </div>
    </section>

    @include('parts.home.test-audit-lead-in')

            <section class="navy">
        <div class="container text-center">
                <h2 class="white">
                   <i>Related Stuff</i>
                </h2>
            <div class="row">
                <a rel="nofollow" href="/parcel-freight-bill-audit" class="btn btn-info btn-inline">
                    PARCEL &amp; FREIGHT AUDIT
                </a>
                <a rel="nofollow" href="/parcel-audit" class="btn btn-info btn-inline">
                    PARCEL AUDIT
                </a>
                <a rel="nofollow" href="/parcel-audit/ups-audit" class="btn btn-info btn-inline">
                    UPS AUDIT
                </a>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            @include('parts.forms.contact-or-schedule', array(
                'scheduleTitle' => 'SCHEDULE A DEMO',
                'scheduleText'  => 'Our Savings Demo Is Quick And Will Demonstrate How To Significantly Reduce Your Shipping Costs.',
                'scheduleBtnText' => 'SCHEDULE NOW',
                'formVars' => array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'Parcel Audit',
                    'btnTxt' => 'CONTINUE',
                    'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                )
            ))
        </div>
    </section>
    @include('parts.test-audit.preview')
@stop
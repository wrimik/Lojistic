@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'UPS Audit - Lojistic',
        'description' => 'Implementing a UPS audit will help you ensure that your bills are accurate and that UPS is being held accountable for the services they provide. ',
        'keywords' => 'ups audit, parcel audit, fedex audit, shipping audit, small parcel audit',
    ])
@overwrite
@section('scripts')
@stop
@section('content')
    <section class="banner navy">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-paper-audit"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">UPS Audit</h1>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <article>
                <p>
                    Implementing a UPS audit will help you ensure that your bills are accurate and that UPS is being
                    held accountable for the services they provide. It will also help illuminate other potential saving
                    opportunities in your transportation operations. With a simple and expedient onboarding process,
                    your UPS audit will be saving you money in no time.
                </p>

                <p>
                    In addition to a go-forward parcel audit, a UPS audit is also able to post-audit up to 6 months
                    back, procuring additional credits from the get-go. This is one of a few differences between a UPS
                    audit and a FedEx audit.
                </p>

                <p>
                    A UPS audit also differs from a FedEx audit in the way that credits are posted. Tehcnically, a UPS
                    audit is a post-audit, in that audited credits appear on future invoices. A FedEx audit, on the
                    other hand, is a pre-audit – so audited credits appear on their respective invoices.
                </p>

                <p>
                    Whatever your carrier mix and allocation may be, employing a third party parcel auditor to handle
                    your UPS audit is one of the best decisions you can make. It will not only save you money, but it
                    will uncover long-term potential saving opportunities that can drastically impact your overall
                    transportation operations.
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
                <a rel="nofollow" href="/parcel-audit/fedex-audit" class="btn btn-info btn-inline">
                    FEDEX AUDIT
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
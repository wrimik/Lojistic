@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Wholesale Shipping Rates  - Lojistic',
        'description' => 'Lojistic’s collective shipping volume allows us access to substantial freight rate discounts on nearly every mode.  We pass these heavily discounted rates to our clients through our wholesale shipping platform.',
        'keywords'    => 'freight rates, freight discount, freight brokerage, freight broker',
    ])
@overwrite
@section('styles')
    {!! Html::style('/css/pages/insurance.css?v='.v())  !!}
@stop
@section('scripts')
    {{--{{ HTML::script('/js/2015/vue.min.js')}}--}}
{{--    {{ HTML::script('/js/2015/visitor.js?v='.v())}}--}}
@stop
@section('content')
    <section class="banner flatSeafoam">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-hi"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Visitor Conversion From</h1>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container visitor">
            <div class="col-sm-6">
                <div class="browsing-as">
                    <h2 class="text-center">You are browsing as:</h2>

                    <div class="row np">
                        <div class="col-xs-12">
                            <div class="input-group">
                                <label for="">Name:</label><br>
                                <b>@{{ first_name }} @{{ last_name }}</b>
                            </div>
                        </div>
                    </div>
                    <div class="row np">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <label for="">Email:</label><br>
                                <b>@{{ email }}</b>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="input-group col-xs-6">
                                <label for="">Company:</label><br>
                                <b>@{{ company }}</b>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="btn btn-success edit-visitor pull-right">UPDATE INFO</div>
                    </div>
                </div>
                <form role="form" action="/thank-you" method="post" class="hsapiform" data-parsley-ui-enabled="true" data-parsley-validate="">
                    <input type="hidden" value="/thank-you" name="thankyou-page">
                    <input type="hidden" value="contact" name="hs[product_interest_s__c]">
                    <input type="hidden" value="719f157e-93c9-4b23-95a9-5d13d9ee23d7" name="formid">

                    <div class="row">
                        <div class="form-group col-xs-6">
                            <input v-model="first_name" type="text" class="form-control" placeholder="First Name"
                                   name="hs[firstname]">
                        </div>
                        <div class="form-group col-xs-6">
                            <input v-model="last_name" type="text" class="form-control" placeholder="Last Name"
                                   name="hs[lastname]">
                        </div>
                        <div class="hp-hidden" style="display: none;">
                            <input type="text" value="" name="hp-check">
                            <!-- Anti s pam field. Valid only if left blank. Field hidden by JS -->
                        </div>
                    </div>
                    <div class="form-group">
                        <input v-model="company" type="text" class="form-control" placeholder="Company"
                               name="hs[company]">
                    </div>
                    <div class="form-group">
                        <input v-model="email" type="text" class="form-control" placeholder="Email *" name="hs[email]" data-parsley-type="email" required="">
                    </div>
                    <div class="form-group">
                        <input v-model="phone" type="text" class="form-control phone" placeholder="Phone" name="hs[phone]">
                    </div>
                    <div class="form-group">
                        <select name="hs[web_comments]" class="form-control">
                            <option value="Sales">I want to talk to someone who knows a lot of ship</option>
                            <option value="Support">I need customer support</option>
                            <option value="Billing">Send me to billing</option>
                            <option value="Products &amp; Services">I have a question about your products or services
                            </option>
                            <option value="selected &quot;Lonely&quot; from contact form">I just get lonely</option>
                            <option value="Web">Your web team didn't anticipate my needs</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="SEND" class="btn btn-primary btn-lg">
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <pre class="col-xs-12">@{{ $data | json }}</pre>
            </div>
        </div>
    </section>
@stop
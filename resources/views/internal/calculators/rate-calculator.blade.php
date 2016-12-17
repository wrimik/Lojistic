@extends('layouts.internal')
@section('page-title')
    Rate Calculator
@stop
@section('content')
    <section>
        <div class="container">
            <!-- Carrier Selection -->
            {!! Form::open(['class'=>'calculator ajax', 'data-success-html' => '#calc-results', 'data-scroll-target' => '#calc-results'])  !!}
            <div class="row">

                <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
                    <label for="rate-carrier">Carrier</label>
                    <select name="carrier" id="rate-carrier" class="dynamic-selector" data-target="#rate-year"
                            data-disable-toggle="#rate-advanced-discounts">
                        <option value="0">Select Carrier</option>
                        <option value="FedEx">FedEx</option>
                        <option value="UPS">UPS</option>
                    </select>
                </div>

                <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
                    <label for="rate-year">Rate Guide Year</label>
                    <select name="year" id="rate-year" class="dynamic-selector" data-load="rate-years.txt"
                            data-parent="#rate-carrier" data-target="#rate-type" required disabled>
                        <option value="">&nbsp;</option>
                    </select>
                </div>

                <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
                    <label for="rate-type">
                        Service Type
                    </label>
                    <select name="type" id="rate-type" data-parent="#rate-year" data-load="parents" required disabled>
                        <option value="">&nbsp;</option>
                    </select>
                </div>

            </div>
            <!-- /Carrier Selection -->

            <!-- Carrier Discounts -->
            <div class="row">

                <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 col-sm-push-4 form-group">
                    <label for="rate-minimum">Minimum Net Charge </label>

                    <div class="input-group">
                        <div class="input-group-addon">$</div>
                        <input name="minimum" id="rate-minimum" type="text" class="form-control dollars"/>
                    </div>
                </div>

                <div class="col-sm-4 col-sm-pull-4 col-sm-offset-0 col-xs-offset-1 col-xs-10">
                    <div class="form-group">
                        <label for="rate-general">Carrier Discount(s)</label>

                        <div class="input-group">
                            <input name="general" id="rate-general" type="text" class="form-control percentage"/>

                            <div class="input-group-addon">%</div>
                        </div>
                        <label for="rate-advanced-discounts">
                            <input disabled id="rate-advanced-discounts"
                                   data-section-toggle="#individual-weight-breaks"
                                   name="advanced" value="1" type="checkbox"/>
                            <small> Use Advanced Discount Options</small>
                        </label>
                    </div>
                </div>

            </div>
            <!-- /Carrier Discounts -->

            <!-- Individual Weight Breaks -->
            <div class="row weight-break-section" id="individual-weight-breaks" style="display:none">

                @include('parts.forms.individual-weight-breaks')

            </div>

            <div class="row">
                <button class="btn btn-primary col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 fs-28"
                        data-scroll-target="#submit-scroll-stop" type="submit">
                    GET CUSTOM RATES
                </button>
            </div>
            <!-- Individual Weight Breaks -->
            <div id="submit-scroll-stop"></div>
            {!! Form::close()  !!}
            <div id="calc-results"></div>
        </div>
    </section>
@stop
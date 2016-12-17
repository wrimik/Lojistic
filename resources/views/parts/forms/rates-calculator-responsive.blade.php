<!-- Carrier Selection -->
<div class="row">

    <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
        <label for="A-carrier">Carrier</label>
        {!! Form::select('A[service][carrier]',[0=>'Select Your Carrier', 'FedEx'=>'FedEx', 'UPS'=>'UPS'], null, ['class'=>'required','id'=>'A-carrier','data-target'=>'#A-year']) !!}
    </div>

    <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
        <label for="rate-year" class="disabled">Rate Guide Year</label>
        <i class="fa fa-info-circle pull-right" data-toggle="tooltip"
           title="Please refer to your most current Rate Guide Year,
           which is provided by your carrier(s). This guide outlines
           the standard, pre-discount rates and outlines all other
           terms of service. Choose the appropriate year and version below.">
        </i>
        <select data-target="#A-type" class="required" name="A[service][year]" id="A-year" required disabled>
            <option value="">&nbsp;</option>
        </select>
    </div>

    <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
        <label for="rate-type" class="disabled">
            Service Type
        </label>
        <i class="fa fa-info-circle pull-right" data-toggle="tooltip"
           title="What service level would you like to compare? Determine
           your preferred time in transit and required delivery date to
           choose the appropriate service type.">
        </i>
        <select name="A[service][name]" id="A-type" class="required" required disabled>
            <option value="">&nbsp;</option>
        </select>
    </div>

</div><!-- /Carrier Selection -->

<!-- Carrier Discounts -->
<div class="row">

    <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 col-sm-push-4 form-group">
        <label for="rate-minimum">Minimum Net Charge </label>
        <i class="fa fa-info-circle pull-right" data-toggle="tooltip"
           title="Your Minimum Net Charge will be listed in your service
           agreement, and is negotiated between you and your rep. This is
           the lowest possible price you can pay for a shipment, regardless
           of negotiated carrier discounts.">
        </i>

        <div class="input-group">
            <div class="input-group-addon">$</div>
            <input name="A[minimum]" id="rate-minimum" type="text" class="form-control percentage"/>
        </div>
    </div>

    <div class="col-sm-4 col-sm-pull-4 col-sm-offset-0 col-xs-offset-1 col-xs-10">
        <div class="form-group">
            <label for="rate-general">Carrier Discount(s)</label>
            <i class="fa fa-info-circle" data-toggle="tooltip"
               title="Input your service-level discount(s) (if applicable) in the box below.
               These discounts will be different for every shipper, and vary by service type.">
            </i>

            <div class="input-group">
                <input name="A[discounts][general]" id="rate-general" type="text" class="form-control percentage"/>

                <div class="input-group-addon">%</div>
            </div>
            <label for="A-advanced-discounts">
                <input name="A[advanced]" disabled id="A-advanced-discounts"
                       data-section-toggle="#individual-weight-breaks" value="1" type="checkbox"/>
                <small>Advanced Discount Options</small>
            </label>
        </div>
    </div>

</div><!-- /Carrier Discounts -->

<!-- Individual Weight Breaks -->
<div class="row weight-break-section" id="individual-weight-breaks" style="display:none">

    @include('parts.forms.individual-weight-breaks')

</div>

@include('parts.forms.contact-info',[
    'howCanWeHelp'  =>  'Custom Rate Quote (This comment as been auto generated)',
    'intent'        =>  'Rates Calculator'
    ])

<div class="row">
    <input class="btn btn-primary col-md-6 col-md-offset-3 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10"
           data-target="#submit-scroll-stop" type="submit" value="GET CUSTOM RATES">
</div>
<!-- Individual Weight Breaks -->
<div id="submit-scroll-stop"></div>
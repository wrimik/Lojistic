<!-- Carrier Selection -->
<div class="row">

    <div class="col-sm-4 form-group">
        <label for="{{ $rateCompare }}-carrier">
            Carrier
        </label>
        <select name="c[{{ $comparison }}][carrier]" id="{{ $rateCompare }}-carrier"
                data-target="#{{ $rateCompare }}-year" class="dynamic-selector"
                data-disable-toggle="#{{$rateCompare}}-advanced-discounts" required>

            <option value="0">Select Carrier</option>
            <option value="FedEx">FedEx</option>
            <option value="UPS">UPS</option>
        </select>
    </div>

    <div class="col-sm-4 form-group">
        <label for="{{ $rateCompare }}-year">
            Rate Guide Year
        </label>
        <i class="fa fa-info-circle" data-toggle="tooltip"
           title="Please refer to your most current Rate Guide Year,
           which is provided by your carrier(s). This guide outlines
           the standard, pre-discount rates and outlines all other
           terms of service. Choose the appropriate year and version below.">
        </i>
        <select name="c[{{ $comparison }}][year]" id="{{ $rateCompare }}-year"
                data-parent="#{{ $rateCompare }}-carrier" data-load="rate-years.txt"
                data-target="#{{ $rateCompare }}-type"
                class="dynamic-selector" required disabled>
            <option value="">&nbsp;</option>
        </select>
    </div>

    <div class="col-sm-4 form-group">
        <label for="{{ $rateCompare }}-type">
            Service Type
        </label>
        <i class="fa fa-info-circle" data-toggle="tooltip"
           title="What service level would you like to compare?
           Determine your preferred time in transit and required
           delivery date to choose the appropriate service type.">
        </i>
        <select id="{{ $rateCompare }}-type" name="c[{{ $comparison }}][type]" data-parent="#rate-year"
                data-load="parents" required disabled>
            <option value="">&nbsp;</option>
        </select>
    </div>

</div><!-- /Carrier Selection -->

<!-- Carrier Discounts -->
<div class="row">

    <div class="col-sm-4 col-sm-push-4 form-group">
        <label for="{{ $rateCompare }}-minimum">
            Minimum Net Charge
        </label>
        <i class="fa fa-info-circle pull-left" data-toggle="tooltip"
           title="Your Minimum Net Charge will be listed in your service agreement,
           and is negotiated between you and your rep. This is the lowest possible
           price you can pay for a shipment, regardless of negotiated carrier discounts.">
        </i>

        <div class="input-group">
            <div class="input-group-addon">$</div>
            <input name="c[{{ $comparison }}][minimum]" id="{{ $rateCompare }}-minimum" type="text"
                   class="dollars form-control"/>
        </div>
    </div>

    <div class="col-sm-4 col-sm-pull-4">
        <div class="form-group">
            <label for="{{ $rateCompare }}-general">
                Carrier Discount
            </label>
            <i class="fa fa-info-circle" data-toggle="tooltip"
               title="Input your service-level discount(s) (if applicable)
               in the box below.  These discounts will be different for every
               shipper, and vary by service type.">
            </i>

            <div class="input-group">
                <input name="c[{{ $comparison }}][general]" id="{{ $rateCompare }}-general" type="text"
                       class="percentage form-control"/>

                <div class="input-group-addon">%</div>
            </div>

            <label for="{{$rateCompare}}-advanced-discounts">
                <input id="{{$rateCompare}}-advanced-discounts"
                       data-section-toggle="#{{$rateCompare}}-individual-weight-breaks"
                       name="c[{{ $comparison }}][advanced]" value="1" type="checkbox"
                       disabled/>
                <small> Use Advanced Discount Options</small>
            </label>
        </div>
    </div>
</div><!-- /Carrier Discounts -->

<!-- Individual Weight Breaks -->
<div class="weight-break-section row" id="{{ $rateCompare }}-individual-weight-breaks" style="display:none">

    @include('parts.forms.individual-weight-breaks', ['comparison'=>$comparison, 'rateCompare'=>$rateCompare])

</div>

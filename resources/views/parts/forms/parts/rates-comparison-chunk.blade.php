<!-- Carrier Selection -->
<div class="row">

    <div class="col-sm-4 form-group">
        <label>
            Carrier
        </label>
        <select name="{{ $which }}[service][carrier]" id="{{ $which }}-carrier" data-target="#{{ $which }}-year" class="required">
            <option value="0">Select Carrier</option>
            <option value="FedEx">FedEx</option>
            <option value="UPS">UPS</option>
        </select>
    </div>

    <div class="col-sm-4 form-group">
        <label class="disabled">
            Rate Guide Year
        </label>
        <i class="fa fa-info-circle" data-toggle="tooltip"
           title="Please refer to your most current Rate Guide Year,
           which is provided by your carrier(s). This guide outlines
           the standard, pre-discount rates and outlines all other
           terms of service. Choose the appropriate year and version below.">
        </i>
        <select name="{{ $which }}[service][year]" id="{{ $which }}-year"
                data-target="#{{ $which }}-type"
                class="required" required disabled>
            <option value="">&nbsp;</option>
        </select>
    </div>

    <div class="col-sm-4 form-group">
        <label for="{{ $which }}-type" class="disabled">
            Service Type
        </label>
        <i class="fa fa-info-circle" data-toggle="tooltip"
           title="What service level would you like to compare?
           Determine your preferred time in transit and required
           delivery date to choose the appropriate service type.">
        </i>
        <select id="{{ $which }}-type" name="{{ $which }}[service][name]" class="required" required disabled>
            <option value="">&nbsp;</option>
        </select>
    </div>

</div><!-- /Carrier Selection -->

<!-- Carrier Discounts -->
<div class="row">

    <div class="col-sm-4 col-sm-push-4 form-group">
        <label for="{{ $which }}-minimum">
            Minimum Net Charge
        </label>
        <i class="fa fa-info-circle pull-left" data-toggle="tooltip"
           title="Your Minimum Net Charge will be listed in your service agreement,
           and is negotiated between you and your rep. This is the lowest possible
           price you can pay for a shipment, regardless of negotiated carrier discounts.">
        </i>
        <div class="input-group">
            <div class="input-group-addon">$</div>
            <input name="{{ $which }}[minimum]" id="{{ $which }}-minimum" type="text" class="dollars form-control"/>
        </div>
    </div>

    <div class="col-sm-4 col-sm-pull-4">
        <div class="form-group">
            <label for="{{ $which }}-general">
                Carrier Discount
            </label>
            <i class="fa fa-info-circle" data-toggle="tooltip"
               title="Input your service-level discount(s) (if applicable)
               in the box below.  These discounts will be different for every
               shipper, and vary by service type.">
            </i>
            <div class="input-group">
                <input name="{{ $which }}[discounts][general]" id="{{ $which }}-general" type="text" class="percentage form-control"/>
                <div class="input-group-addon">%</div>
            </div>

            <label for="{{$which}}-advanced-discounts">
                <input id="{{$which}}-advanced-discounts"
                       data-section-toggle="#{{$which}}-individual-weight-breaks"
                       name="{{ $which }}[advanced]" value="1" type="checkbox"
                        disabled />
                <small> Advanced Discount Options</small>
            </label>
        </div>
    </div>
</div><!-- /Carrier Discounts -->

<!-- Individual Weight Breaks -->
<div class="weight-break-section row" id="{{ $which }}-individual-weight-breaks" style="display:none">

    @include('parts.forms.individual-weight-breaks', ['which'=>$which])

</div>

<?php
$weightBreaks = [
    ['letter', '1-5', '6-10'],
    ['11-15', '16-20', '21-25'],
    ['26-30', '31-35', '36-40'],
    ['41-45', '46-70', '71-150']
];
$count = 1;
?>
{{--<h4 class="text-left" id="$rateCompare or 'rate'}}-discount-label"></h4>--}}
<h4 class="text-left" id="{{ $which }}-rate-discount-label"></h4>
<div class="col-xs-12 form-group">
    <div class="row">
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
                <input name="{{ $which }}[discounts][tier]" type="text" class="form-control percentage"/>
                <div class="input-group-addon">%</div>
            </div>
        </div>
    </div>
</div>

<div class="form-break">
    + <hr />
</div>

<h4 class="text-left"><span id="{{ $which }}-rate-weight-break-label"></span> Weight Break Discounts</h4>
@foreach($weightBreaks as $break)
<div class="col-lg-4 col-md-6 form-group">
    <div class="row">
        {!! Form::label('rate-'.$break[0], $count != 1 ? $break[0].' lb' : ucfirst($break[0]),  ['class'=>'control-label col-md-5 col-sm-4 col-xs-5'])  !!}
        <div class="col-xs-7">
            <div class="input-group">
                <input name="{{ $which }}[discounts][{{$count!=1?$break[0]:0}}]" id="{{ $which }}-rate-{{ $break[0] }}" type="text" class="form-control percentage"/>
                <div class="input-group-addon">%</div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 form-group">
    <div class="row">
        {!! Form::label('rate-'.$break[1], $break[1].' lb', ['class'=>'control-label col-md-5 col-sm-4 col-xs-5'])  !!}
        <div class="col-xs-7">
            <div class="input-group">
                <input name="{{ $which }}[discounts][{{ $break[1] }}]" id="{{ $which.'-rate-'.$break[1] }}" type="text" class="form-control percentage"/>
                <div class="input-group-addon">%</div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 form-group">
    <div class="row">
        {!! Form::label('rate-'.$break[2], $break[2].' lb', ['class'=>'control-label col-md-5 col-sm-4 col-xs-5']) !!}
        <div class="col-xs-7">
            <div class="input-group">
                <input name="{{ $which }}[discounts][{{ $break[2] }}]" id="{{ $which.'-rate-'.$break[2] }}" type="text" class="form-control percentage"/>
                <div class="input-group-addon">%</div>
            </div>
        </div>
    </div>
</div>
<?php $count++; ?>
@endforeach

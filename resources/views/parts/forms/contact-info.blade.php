<input type="hidden" name="thankyou-page" value="{{$thankyouPage or '/thank-you'}}"/>
<input type="hidden" name="hs[product_interest_s__c]" value="{{$intent or 'Contact'}}"/>
<input type="hidden" name="formid" value="{{ $formID  or '8063c6d0-b148-401c-8b8a-2b29b186737a'}}"/>
<div class="row">
    <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
        <label for="hs[fullname]">
            Full Name
        </label>
        {!! Form::text('hs[fullname]', null, ['class'=>'form-control required','required'=> '','id'=>'hs[fullname]'])  !!}
    </div>

    <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
        <label for="hs[email]">
            Email
        </label>
        {!! Form::text('hs[email]', null, ['class'=>'form-control required', 'required'=>'','id'=>'hs[email]'])  !!}
    </div>

    <input name="hp-check" value="" type="hidden"/>
    <!-- Anti spam field. Valid only if left blank. Field hidden by JS -->

    <div class="col-sm-4 col-sm-offset-0 col-xs-offset-1 col-xs-10 form-group">
        <label for="hs[phone]">
            Phone
        </label>
        {!! Form::text('hs[phone]', null, ['class'=>'form-control required phone', 'required' => '','id'=>'hs[phone]']) !!}
    </div>

</div>

{{-- Set web_comments field with a value to hide it.  If it is not hidden show field--}}
@if(!isset($howCanWeHelp))
<div class="row">
    <div class="form-group">
        <textarea name="hs[web_comments]" placeholder="How Can We Help?" class="form-control"></textarea>
    </div>
</div>
@else
    {!! Form::hidden('hs[web_comments]',$howCanWeHelp) !!}
@endif

{{-- Set button text to show button with given text --}}
@if(isset($btnTxt))
<div class="form-group">
    <input type="submit" class="btn btn-primary" value="{{ $btnTxt }}"/>
</div>
@endif
<form class="hsapiform" method="post" action="{{ $thankyouPage }}" role="form"data-parsley-ui-enabled="true" data-parsley-validate="">
    <input type="hidden" name="thankyou-page" value="{{ $thankyouPage }}"/>
    <input type="hidden" name="hs[product_interest_s__c]" value="{{ $intent }}"/>
    <input type="hidden" name="formid" value="{{ $formID }}"/>
    <div class="row">
        <div class="form-group col-xs-6">
            <input name="hs[firstname]"  placeholder="First Name" type="text" class="form-control"/>
        </div>
        <div class="form-group col-xs-6">
            <input name="hs[lastname]" placeholder="Last Name" type="text" class="form-control"/>
        </div>
    </div>
    <div class="form-group">
        <input name="hs[company]" placeholder="Company" type="text" class="form-control"/>
    </div>
    <div class="form-group">
        <input name="hs[email]" placeholder="Email *" type="text" class="form-control" data-parsley-type="email" required=""/>
    </div>
    <div class="form-group">
        <input name="hs[phone]" placeholder="Phone" type="text" class="form-control phone"/>
    </div>
    {{-- Set web_comments field with a string to hide it, an array to make a select, or unset to show textarea--}}
@if(!isset($howCanWeHelp))
    <div class="form-group">
        <textarea name="hs[web_comments]" placeholder="How Can We Help?" class="form-control"></textarea>
    </div>
@elseif(is_array($howCanWeHelp))
        <div class="form-group">
            {!! Form::select('hs[web_comments]', $howCanWeHelp, null, array('class'=>'form-control'))  !!}
        </div>
@else
    {!! Form::hidden('hs[web_comments]', $howCanWeHelp)  !!}
@endif
    <div class="form-group">
        <input type="submit" class="btn btn-primary btn-lg" value="{{ $btnTxt }}"/>
    </div>
    <div class="hp-hidden" style="width:0;height:0;overflow:hidden;">
        <input name="hp-check" value="" type="text" style="opacity:0"/>
        {!! csrf_field() !!}
        <!-- Anti spam field. Valid only if left blank. Field hidden by JS -->
    </div>
</form>
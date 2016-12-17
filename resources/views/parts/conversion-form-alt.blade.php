
<div style="max-width: 400px; margin: 0px auto; border: 3px solid {{ $color }};">
<div class="featurette-alt-border {{ $color }}">
    <div class="featurette" style="background-color:{{ $subcolor }}">
        <div class="{{ $color }}">
            <h3 class=" featurette-title text-center" style="background-color:{{ $color }}">  <span class="white"> Yes I Want Wholesale Rates!</span></h3>
        </div>
        <div class="text-center">
            <div class="tri tri-30 form-triangle-adjustment {{ $colorname }}"></div>
        </div>
        <div class="featurette-alt-body">
            <form class="hsapiform" method="post" action="{{ $thankyouPage }}" role="form">

                <input type="hidden" name="thankyou-page" value="{{ $thankyouPage }}"/>
                <input type="hidden" name="hs[product_interest_s__c]" value="{{ $intent }}"/>
                <input type="hidden" name="formid" value="{{ $formID }}"/>
                <!-- A/B test hidden fields -->
                {{--<input type="hidden" name="hb-button-color" value="{{ $hb-button-color }}"/>--}}
                {{--<input type="hidden" name="hb-button-text" value="{{ $hb-button-text }}"/>--}}
                {{--<input type="hidden" name="hb-conversion-page" value="{{ $hb-conversion-page }}"/>--}}
                {{--<input type="hidden" name="hb-form-style" value="{{ $hb-form-style }}"/>--}}
                {{--<input type="hidden" name="hb-leadin-id" value="{{ $hb-leadin-id }}"/>--}}
                {{--<input type="hidden" name="hb-session-landing-page" value="{{ $hb-session-landing-page }}"/>--}}
                {{--<input type="hidden" name="hb-sessions-page-views" value="{{ $hb-sessions-page-views }}"/>--}}
                {{--<input type="hidden" name="hb-time-to-conversion" value="{{ $hb-time-to-conversion }}"/>--}}
                <!--end A/B test -->

                <div class="form-group">
                    <input name="hs[firstname]"  placeholder="First Name" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <input name="hs[lastname]" placeholder="Last Name" type="text" class="form-control"/>
                </div>
                <div class="hp-hidden">
                    <input name="hp-check" value="" type="text"/>
                    <!-- Anti spam field. Valid only if left blank. Field hidden by JS -->
                </div>
                <div class="form-group">
                    <input name="hs[company]" placeholder="Company" type="text" class="form-control"/>
                </div>
                <div class="form-group">
                    <input name="hs[email]" placeholder="Email *" type="text" class="form-control"/>
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
                    {!! Form::hidden('hs[web_comments]', $howCanWeHelp) !!}
                @endif
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" value="{{ $btnTxt }}"/>
                </div>
            </form>
            <div class="arrow-alt-placement animated pulse hidden-sm hidden-xs">
                <div class="arrow-alt-content">
                    <h4 class="flatSeafoam text-center">Quick and easy...<br> Sign up and start shopping!</h4>
                </div>
                <img src="/images/arrow.svg">
            </div>
        </div>
    </div>
</div>
</div>
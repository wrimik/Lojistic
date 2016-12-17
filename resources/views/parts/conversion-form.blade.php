<div style=" width:100%; margin: 0px auto; border: 3px solid {{ $color }};">
<div class="featurette-border {{ $color or '' }}">
    <div class="featurette" style="background-color:{{ $subcolor }}">
        <div class="{{ $color or '' }}">
            <h3 class=" featurette-title text-center" style="background-color:{{ $color }}">  <span class="white"> {{ $title or '' }}</span></h3>
        </div>
        <div class="text-center">
            <div class="tri tri-30 form-triangle-adjustment" style="border-top-color:{{ $color }}"></div>
        </div>
        <div class="featurette-body">
            <form class="hsapiform" method="post" action="{{ $thankyouPage }}" role="form" data-parsley-ui-enabled="true" data-parsley-validate="">

                <input type="hidden" name="thankyou-page" value="{{ $thankyouPage }}"/>
                <input type="hidden" name="hs[product_interest_s__c]" value="{{ $intent }}"/>
                <input type="hidden" name="formid" value="{{ $formID }}"/>
                <!-- A/B test hidden fields -->
                <input type="hidden" name="hb-button-color" value="{{ $btnColor or '' }}"/>
                <input type="hidden" name="hb-button-text" value="{{ $btnTxt or ''}}"/>
                <input type="hidden" name="hb-conversion-page" value="{{ $hbConversionPage or ''}}"/>
                <input type="hidden" name="hb-form-style" value="{{ $hbFormStyle or ''}}"/>
                <input type="hidden" name="hb-leadin-id" value="{{ $hbLeadinId or '' }}"/>
                <input type="hidden" name="hb-session-landing-page" value="{{ $hbSessionLandingPage or '' }}"/>
                <input type="hidden" name="hb-sessions-page-views" value="{{ $hbSessionsPageViews or ''}}"/>
                <input type="hidden" name="hb-time-to-conversion" value="{{ $hbTimeToConversion or '' }}"/>
                <!--end A/B test -->

                <div class="form-group">
                    <input name="hs[firstname]" type="text" placeholder="First Name"  class="conversion-form form-control">
                </div>
                <div class="form-group">
                    <input name="hs[lastname]" type="text" placeholder="Last Name"  class="conversion-form form-control">
                </div>
                <div class="form-group">
                    <input name="hs[company]" placeholder="Company" type="text" class="conversion-form form-control">
                </div>
                <div class="form-group">
                    <input name="hs[email]" placeholder="Email *" type="text" class="conversion-form form-control" data-parsley-type="email" required="">
                </div>
                <div class="form-group">
                    <input name="hs[phone]" placeholder="Phone" type="text" class="conversion-form form-control phone">
                </div>
                <!-- Set web_comments field with a string to hide it, an array to make a select, or unset to show textarea-->
                @if(!isset($howCanWeHelp))
                    <div class="form-group">
                        <textarea name="hs[web_comments]" placeholder="How Can We Help?" class="form-control"></textarea>
                    </div>
                @elseif(is_array($howCanWeHelp))
                    <div class="form-group">
                        {!! Form::select('hs[web_comments]', $howCanWeHelp, null, array('class'=>'form-control'))  !!}
                    </div>
                @elseif($howCanWeHelp != false)
                    {!! Form::hidden('hs[web_comments]', $howCanWeHelp)  !!}
                @endif
                <div class="form-group">
                    <input type="submit" name="button" class="btn btn-lg {{ $btnColor or '' }}" value="{{ $btnTxt }}"/>

                </div>
                <div class="hp-hidden" style="width:0;height:0;overflow:hidden">
                    <input name="hp-check" value="" type="text" style="opacity:0;"/>
                    <!-- Anti spam field. Valid only if left blank. Field hidden by JS -->
                </div>
                {{  csrf_field() }}
            </form>
            <div class="arrow-placement animated pulse hidden-md hidden-sm hidden-xs">
                <div class="arrow-content">
                    <h4 class=" text-center {{ $colorname }}">{!! $arrowContents or 'Sign Up' !!}  </h4>
                </div>

                <!-- Changed to inline svg to simplify the process of filling the color on the arrow -->
                <svg version="1.1" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px" width="226.779px" height="112.971px" viewBox="0 0 226.779 112.971" xml:space="preserve">
                    <path fill="{{ $color }}" d="M183.65,109.94l-14.923-26.961C107.821,101.241,37.564,94.403,3.542,32.536
	                    c42.182,39.385,95.675,32.59,138.894,2.946L127.763,8.972l94.359,13.721L183.65,109.94z M222.123,22.693"/>
                    </svg>
            </div>
        </div>
    </div>
</div>
</div>
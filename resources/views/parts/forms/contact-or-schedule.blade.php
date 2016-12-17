<div class="stripe" id="convert">
    <a id="schedule"></a> <!--  for  url#schedule links -->
    <div class="container">
        <div class='col-sm-5 col-sm-offset-1 col-xs-12 text-center schedule'>
            <span class="eloji-schedule orange fs-200"></span>
            <h2 class="text-center"> {!! $scheduleTitle  !!} </h2>
            <p>
                {!! $scheduleText !!}
            </p>
            <div id="schedule_btn" data-target="#schedule_scroll_target" class='scrollTo btn btn-primary btn-lg'>{{ $scheduleBtnText }}</div>
        </div>
        <div class='col-sm-5 col-xs-12 sch-contact'>
            <div>
                <h2><img src='{{ URL::asset('images/orange-phone.png') }}'/> (800) 783-5753</h2>
            </div>
            <div>
                <h2>
                    <a href="mailto:info@lojistic.com?subject={{ urlencode($formVars['intent']) }}">
                    <img id="letter" src='/images/orange-letter.png'/>EMAIL US</a>
                </h2>
            </div>
            @include(
            'parts.hubspot-form',
                $formVars
            )
        </div>
        <div id="schedule_scroll_target" class="col-xs-12"></div>
        <div class="row" id='schedule_iframe'>
            <div id='whiteout'></div>
        </div>
    </div>
</div>
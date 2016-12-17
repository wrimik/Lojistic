

<div class="text-center feature">
    <div class="title-color {{ $topcolor or '' }}"></div>
    <div class="{{ $flagColor or 'navy' }} title" ><span class="text-vc"> {{ $title or '' }}</span></div>
    <div class="body {{ $bodycolor }}">
        <p class="">
            {!! $text or '' !!}
        </p>
        <br/>
    </div>
</div> <!-- end featurette -->


<div class="text-center feature-section">
    <div class="{{ $flagColor or 'navy' }}">{{ $heading or '' }}</div>
    <div class="">
        <br/>
        <span class="fw-bold flatBlue">
            {{ $flagTitle or '' }}
        </span>
        <p class="fs-16 @if(isset($sameHeight)) same-height @endif">
            {{ $text or ''}}
        </p>
        <br/>
    </div>
</div> <!-- end featurette -->
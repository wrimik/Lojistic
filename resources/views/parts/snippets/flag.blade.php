<?php
/**
include('parts.snippets.flag', array(
    'flagColor' => '', //navy
    'title' => '',
    'text' => '',
    'eloji' => '',
    'elojiColor' => '' //green
))
 */
?>
<div class="col-sm-{{ $size or '4' }} text-center flag"><!-- flag -->
    <div class="col-xs-12  {{ $flagColor or 'navy' }}">{{ $heading or '' }}</div>
    <div class="col-xs-12">
        <br/>
        <span class="fw-bold flatBlue">
            {{ $flagTitle or '' }}
        </span>
        @if(isset($eloji))
            <i class="eloji {{ $eloji }} {{ $elojiColor or 'navy' }} fs-64"></i>
            <br>
            <br>
        @endif
        <p class="fs-16 @if(isset($sameHeight)) same-height @endif">
            {!! $text or '' !!}
        </p>
        @if(isset($btnText))
            <br/>
            <a class="btn btn-primary" rel="nofollow" href="{{ $url }}">
                <i class="eloji {{ $btnEloji or '' }} {{ $btnElojiColor or 'white' }}"></i>
                {!! $btnText !!}
            </a>
            <br/>
        @endif
        <br/>
    </div>
</div> <!-- end flag -->
<?php
/**
 *  include('parts.snippets.pog', array(
 *       'eloji'=>'',
 *       'desc'=>'',
 *       'url'=>'',
 *       'title'=>''
 *       ))
 */
?>
<div class="pog-container flip-container text-center" ontouchstart="this.classList.toggle('hover');">
    <a href="{{ $url }}" {{ $linkAttr or '' }}>
        <span class="pog flipper">
            @if(isset($eloji))
                <div class="pog-img flip-front fs-76 text-center {{ $color }}">
                    <i class="eloji {{ $eloji }}"></i>
                </div>
            @else
                <span class="pog-img flip-front" style="background:url({{ $img }}) no-repeat center 100%;"> </span>
            @endif
            <span class="pog-desc flip-back">
                <span>{!! $desc  !!}</span>
            </span>
        </span>
        <span class="pog-title">
            {!! $title !!}
        </span>
        @if(isset($btnClass))
            <br/>
            <span class="btn {{ $btnClass }}">{!! $btnTxt !!}</span>
        @endif
    </a>
</div>
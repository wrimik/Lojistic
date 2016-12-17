<?php
/**
 *
 */
?>
<div class="text-center">
    <div class="circ circ-{{ $circSize or '150' }} {{ $badgeColor or 'navy' }}">
        <div class="text-vc">
            <span class="eloji {{ $eloji or 'eloji-check' }} {{ $elojiColor or 'white' }} fs-{{ $elojiSize or '64' }}  "></span>
        </div>
    </div>
    <br>
    <b class="fs-{{ $fontSize or '20' }} {{ $textColor or 'navy' }}">{!!  $text or 'Badge!'  !!}</b>
</div>
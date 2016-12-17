<?php
/**
 *   include('parts.snippets.bottom-loaded-Featurette', array(
 *             'color'=>'brightBlue',
 *             'eloji'=>'eloji-audit',
 *             'blftitle'=> ' Instant (free) UPS& FedEx Audit',
 *             'blfcontent'=>'Audisee instantly checks your UPS & FedEx invoices for refund opportunities.',
 *             'bottomtitle'=>'INSTANTLY AUDIT FEDEX & UPS'
 *              ))
 */
?>

    <div class="bl-featurette-container text-center">
        <div class="bl-featurette-img fs-64 text-center {{ $color }}">
            <i class="eloji text-vc {{ $eloji }}"></i>
        </div>
        <div class="blf-content">
            <h4 class="{{ $color }} text-center blf-title">
                {!! $blftitle  !!}
            </h4>
            <p class="text-center">
            {!! $blfcontent  !!}
            </p>
        </div>
        <div class="bottom-title {{ $color }}">
           <h5>{!! $bottomtitle  !!}</h5>
        </div>

    </div>



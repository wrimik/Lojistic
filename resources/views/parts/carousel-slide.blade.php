<?php
/**
    include('parts.carousel-slide', array(
           'eloji' => 'eloji-hi',
           'title'=>'',
           'desc'  => ''
       ))
 */
?>
<div class="item {{ $active or '' }}">
    <div class="carousel-caption">
        <div class="col-sm-4">
            <i class="eloji {{ $eloji or 'eloji-hi' }} fs-150"></i>
        </div>
        <div class="col-sm-8 text-left fs-16">
            <h3>{{ $title or 'title' }}</h3>
            {{ $desc or '<b>desc</b>' }}
        </div>
    </div>
</div>
<div class="circle-element">
    <div class="circle-element-body">
        <div class="circ {{ $circleSize }} {{ $color }} {{ $hover or '' }} text-center" style="{{ $elojistyle or '' }}">
            <i class="eloji {{ $eloji }} {{$elojiSize}} {{$elojicolor or ''}} text-vc"></i>
        </div>
        <h3 class="text-center {{ $titlecolor or 'flatGrey' }} ">{!! $title or ''  !!}</h3>
        <p class="text-center feature {{ $textcolor or 'flatGrey' }}" style="line-height:20px;"><small>{!! $text or '' !!} </small></p>
    </div>
</div>
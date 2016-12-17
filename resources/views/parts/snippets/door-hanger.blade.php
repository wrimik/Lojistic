{{--
        @include('parts.snippets.door-hanger', [
            'title' => '',
            'title-color' => '',
            'eloji' => '',
            'eloji-circ circ-color' => '',
            'text' => ''
        ])
--}}
<div class="door-hanger">
    <div class="dh-header {{ $titleColor }} text-center col-center">
        <h4 class="dh-title">{!! $title !!}</h4>
    </div>
    <div class="dh-body text-center">
        <div class="circ circ-150 {{ $elojiCircColor }} text-center">
            <i class="eloji {{ $eloji }} text-vc fs-72"></i>
        </div>
        <p class="dh-content fs-20 same-height">
            {!! $text !!}
        </p>
    </div>
</div>
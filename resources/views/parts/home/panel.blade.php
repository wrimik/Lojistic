{{--
    @include('parts.snippets.panel', [
        'title' => '',
        'url' => '',
        'eloji' => '', eloji or image
        'imgSrc' => '',
        'btnText' => ''
    ])
--}}
<div class="panel panel-default">
    <div class="panel-trim flatBlue"></div>
    <div class="panel-body same-height text-center">
        <h4 class="fs-20 flatBlue" class="flatBlue">{!! $title !!}</h4>
        <p>
            <br>
            <a href="{{ $url }}">
                @if(isset($eloji))
                    <i class="eloji {{ $eloji }} fs-96 flatBlue"></i>
                @elseif($imgSrc)
                    <img src="{{ $imgSrc }}" alt="{{ $title }}">
                @endif
            </a>
        </p>

        <div class="row">
            <a href="{{ $url }}" class="btn btn-primary">
                {!! $btnText !!}
            </a>
        </div>
    </div>
</div>
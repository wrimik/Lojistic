<div class="service mob-on-stage" style="background:{{ $color }};">
    <div>
        <div class="product-title">
            {!! $product !!}
            <hr/>
        </div>
        <div class="product-icon">
            <i class="eloji {{ $eloji }} fs-80 white"></i>
            <br/>
            <p>
                {!! $quote  !!}
            </p>
            @if($url)
                <a class="btn btn-info" href="{{ $url }}">CHECK IT OUT</a>
            @endif
        </div>
    </div>
</div>
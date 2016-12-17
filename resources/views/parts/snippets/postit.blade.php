{{--@include('parts.snippets.postit', [--}}
               {{--'color' => '',--}}
               {{--'eloji' => '',--}}
               {{--'title' => '',--}}
               {{--'content' => '',--}}
           {{--])--}}
<div class="postit {{ $color }}">
    <div class="col-xs-2 text-center np">
        <br/>
        <i class="eloji {{ $eloji }} fs-24"></i>
    </div>
    <div class="col-xs-10 white">
        <div class="p-30">
            <p class="navy"><b>{{ $title }}</b></p>
            <p class="navy fs-16">{{ $content }}</p>
        </div>
    </div>
</div>
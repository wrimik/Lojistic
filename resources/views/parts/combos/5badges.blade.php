@foreach($badges as $key => $badge)
    <?php $array = array_merge($vars, $badge); ?>
    <div class="col-sm-5th col-xs-6 same-height @if($key == 4)col-sm-offset-0 col-xs-offset-3 @endif">
        @include('parts.snippets.badge', $array)
    </div>
@endforeach
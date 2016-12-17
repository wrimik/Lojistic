<section class="flatBlue">
    <div class="container">
        <h2>You Might Also Like</h2>
        <br>
        @foreach(array_slice($related, 0, 3) as $rel)
            <div class="col-sm-4 col-xs-8  col-xs-offset-2  col-sm-offset-0">
                @include('parts.snippets.pog', $rel)
                <br>
                <br>
            </div>
        @endforeach
    </div>
</section>
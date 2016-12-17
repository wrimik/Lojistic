<section class="np">
    <div class="container">
        <p class="flatGrey fs-12">
            <span class=" pull-left"> &nbsp; &copy; {{ date('Y') }} Lojistic</span>
            <span class="pull-right">3200 Park Center Drive, Costa Mesa, CA 92626 &nbsp; &nbsp; </span>
        </p>
    </div>
</section>

<script src="//www.google.com/jsapi"></script> <!-- used in charts -->

{!! Html::script('/js/2016/libraries.js')  !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.1/vue.js')  !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.1.2/parsley.min.js')  !!}
{!! Html::script('/js/all.js?'.v())  !!}

@yield('scripts')
@include('google.tag-manager')
</body>
</html>
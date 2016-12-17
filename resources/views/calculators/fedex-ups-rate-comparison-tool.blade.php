@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'UPS & FedEx Rates Comparison Calculator - Lojistic',
        'description' => 'Use our shipping comparison tool to compare FedEx vs. UPS rates. A shipping price comparison helps you save money. Contact Lojistic for freight audit services.',
        'keywords'    => 'shipping comparison, fedex vs ups rates, shipping cost comparison, ups vs fedex rates, compare shipping costs, shipping price comparison, ups comparison',
    ])
@overwrite

@section('styles')
@stop

@section('scripts')
    {!! Html::script('/js/2016/misc/notify.min.js') !!}
    <script>
        $(document).ready(function(){
            $.notify.addStyle('wrapWarning', {
                html: '<div><i class="fa fa-times pull-right"></i><span data-notify-text/></div>',
                classes:{
                    base:{
                        "width": "325px",
                        "padding": "15px",
                        "border-radius": "10px",
                        "font-size": "16px"
                    },
                    warning: {
                        "opacity": "0.85",
                        "color": "white",
                        "background-color": "#F6921E"
                    },
                    info: {
                        "opacity": "0.95",
                        "color": "white",
                        "background-color": "#6096C3"
                    }
                }
            });
        });
    </script>
@stop

@section('content')
<section>
    <div class="container">
        <h1 class="text-center navy">UPS & FedEx Rates Comparison Calculator</h1>
        <form id="shipping-comparison-form" class="calculator" autocomplete="off">

            @include('parts.forms.rates-comparison-calculator')

        </form>

        <!-- Calculator Results -->
        <div id="calc-results"></div>

    </div>
</section>

<section class="silver">
    <div class="container">
        <article>
            {{-- TODO: Ask steve for content header --}}
            <p>
                Lojistic can help you with your shipping comparison needs. We have tools
                that make it easy to compare FedEx vs. UPS rates so that you can find the lowest
                possible prices for your shipping needs. A shipping cost comparison can help you
                determine if your current shipping contracts are the best that is available for
                your business. UPS vs. FedEx rates will vary depending on your current shipping
                characteristics. It is important to compare shipping costs on a regular basis.
            </p>

            <p>
                We offer services that will help you save on your shipping costs. Our freight
                audit services can help you save money on your regular shipping services. Lojistic
                can also do a parcel audit that looks at your smaller shipping needs. The team
                of experts here at Lojistic will work to make your freight management
                easier and more affordable. We can help you with a shipping price comparison so
                that you can easily evaluate your services each year and find a contract that
                works well for you. Our FedEx and UPS comparison service can make it easier to
                find the best deals available.
            </p>

            <p>
                During challenging economic times, you may be looking for ways to lower costs.
                The cost of shipping can quickly lower profit margins, which is why it is so
                important to complete a shipping comparison every year. This may enable you to
                negotiate better shipping rates. FedEx vs. UPS rates will vary depending on your
                volume and shipping needs. A shipping cost comparison will help you find areas
                that you can save.
            </p>

            <p>
                At Lojistic, we can compare UPS vs. FedEx rates, along with other
                shipping carriers, in an effort to help you lower the cost of getting your
                product out to your customers. It is important to compare shipping costs when
                you are negotiating a new contract or just starting out in business. Our shipping
                price comparison services have helped many companies save money. A FedEx and UPS
                comparison will give you the information you need to choose the most cost effective
                reliable shipping service for your company.
            </p>
        </article>
    </div>
</section>
@stop


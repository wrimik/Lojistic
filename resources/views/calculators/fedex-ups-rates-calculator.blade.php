@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
    'title'         => 'Custom UPS & FedEx Rates Calculator - Lojistic',
    'description'   => 'You can learn how to save money on shipping before hand when you use a good UPS rates calculator and FedEx rate calculator from Lojistic.',
    'keywords'      => 'shipping calculator ups, ups rates calculator, fedex rate calculator, fedex cost calculator, shipping calculator comparison, fedex shipping cost calculator, shipping comparison calculator'
    ])
@overwrite
@section('scripts')
{!! Html::style('/js/2016/misc/notify.min.js') !!}
    <script>
        $(document).ready(function(){
//            $.notify.addStyle('wrapWarning', {
//                html: '<div><i class="fa fa-times pull-right"></i><span data-notify-text/></div>',
//                classes:{
//                    base:{
//                        "width": "325px",
//                        "padding": "15px",
//                        "border-radius": "10px",
//                        "font-size": "16px"
//                    },
//                    warning: {
//                        "opacity": "0.85",
//                        'color': "white",
//                        'background-color': '#F6921E'
//                    },
//                    info: {
//                        "opacity": "0.95",
//                        'color': "white",
//                        'background-color': '#6096C3'
//                    }
//                }
//            });
        });
    </script>
@stop

@section('content')
<section>
    <div class="container">
        <h1 class="text-center navy">Custom UPS & FedEx Rates Calculator</h1>
        <form id="shipping-calculator-form" class="calculator" autocomplete="off">

            @include('parts.forms.rates-calculator-responsive', ['which'=> 'A'])

        </form>

        <!-- Calculation results -->
        <div id="calc-results"></div>
        <!-- /Calculation results -->

    </div>

    <!-- Peet Nochio!!! -->
    <div class="peetnochio" style="display:none">
        <img src="/svgs/peetnochio-face.svg" alt="Never tell a lie">

        <div class="peetnochio-nose transition"></div>
    </div>
    <!-- /Peet Nochio!!! -->

</section>

{{-- Carrier Rates
<section id="carrier-rates">
    <h3 class="text-center">Download Published Carrier Rates</h3>
    <table>
        <tr>
            <td class="year">2015</td>
            <td></td>
            <td class="rates">
                <a rel="nofollow" href="#">UPS Daily Rates</a>
                <a rel="nofollow" href="#">UPS Standard Rates</a>
                <a rel="nofollow" href="#">FedEx Rates</a>
            </td>
            <td class="break"></td>
            <td class="year">2012</td>
            <td></td>
            <td class="rates">
                <a rel="nofollow" href="#">UPS Daily Rates</a>
                <a rel="nofollow" href="#">UPS Standard Rates</a>
                <a rel="nofollow" href="#">FedEx Rates</a>
            </td>
        </tr>
        <tr><td class="row-break" colspan="7"></td></tr>
        <tr>
            <td class="year">2014</td>
            <td></td>
            <td class="rates">
                <a rel="nofollow" href="#">UPS Daily Rates</a>
                <a rel="nofollow" href="#">UPS Standard Rates</a>
                <a rel="nofollow" href="#">FedEx Rates</a>
            </td>
            <td class="break"></td>
            <td class="year">2011</td>
            <td></td>
            <td class="rates">
                <a rel="nofollow" href="#">UPS Daily Rates</a>
                <a rel="nofollow" href="#">UPS Standard Rates</a>
                <a rel="nofollow" href="#">FedEx Rates</a>
            </td>
        </tr>
        <tr><td class="row-break" colspan="7"></td></tr>
        <tr>
            <td class="year">2013</td>
            <td></td>
            <td class="rates">
                <a rel="nofollow" href="#">UPS Daily Rates</a>
                <a rel="nofollow" href="#">UPS Standard Rates</a>
                <a rel="nofollow" href="#">FedEx Rates</a>
            </td>
            <td class="break"></td>
            <td class="year">2010</td>
            <td></td>
            <td class="rates">
                <a rel="nofollow" href="#">UPS Daily Rates</a>
                <a rel="nofollow" href="#">UPS Standard Rates</a>
                <a rel="nofollow" href="#">FedEx Rates</a>
            </td>
        </tr>
    </table>
</section> .Carrier Rates

<div class="white stripe"></div>
--}}
<section class="silver">
    <div class="container">
        <article>
            <p>
                Shipping and freight costs often represent a large portion of a company's
                overhead. Here at Lojistic, our goal is to help your company save money
                on freight and shipping. Among our most useful, free freight management solutions
                are the UPS rates calculator and FedEx rate calculator. Using these UPS and FedEx
                cost calculator tools, you can get valuable insight on carrier shipping costs.
            </p>

            <p>
                Our UPS and FedEx shipping cost calculator tools are easy to use, and they help
                you identify the lowest-cost shipping option. No one wants to conduct a parcel
                audit and discover after the fact that they could have saved more money if they
                had just made use of a shipping calculator comparison. The shipping comparison
                calculator tools make it easy to view charges from FedEx and UPS side by side.
                You compare apples-to-apples with this shipping calculator. UPS and FedEx shipping
                charges for packages of the same weight and size are calculated and presented to
                you for a simple comparison.
            </p>

            <p>
                When you use our UPS rates calculator and FedEx rate calculator, it is important
                that you be as specific as possible. When it comes to each shipping calculator,
                UPS and FedEx calculators included, the results you get for your shipping calculator
                comparison are only as good as the information you input into the UPS and FedEx
                shipping cost calculator. You can be assured that our UPS and FedEx cost calculator
                will provide you with the accurate information you need to analyze and identify
                the best shipping contracts for your business.
            </p>

            <p>
                In addition to our shipping comparison calculator tool, Lojistic is
                also happy to provide freight audit services and other forms of freight management.
                Many customers find these services invaluable as they allow them to focus on other
                aspects of their business. Our UPS rates calculator and FedEx rate calculator are
                just a small example of the resources that Lojistic can provide.
            </p>

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

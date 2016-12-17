@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Parcel & Freight Shipping Costs Calculators - Lojistic',
        'description' => 'Shipping cost calculators to determine rates and compare FedEx and UPS shipping costs. At Lojistic we conduct an audit to help you save money. Contact us today.',
        'keywords'    => 'shipping calculator, shipping cost calculator, freight shipping calculator, calculate shipping cost, shipping rate calculator, shipping costs calculator, freight costs calculator',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <h1 class="text-center navy">Parcel &amp; Freight Shipping Costs Calculators</h1>

            @include('parts.calculators')
            <hr/>
            <p>
                As part of our commitment to helping you save money,
                Lojistic offers a couple free shipping calculator tools.
                These can be used to calculate shipping cost for your
                company and help you negotiate better shipping contracts.
                Using these shipping cost calculators, you can get a good
                understanding of where you can save significant dollars on
                your mailing costs.

                These shipping cost calculator tools are just part of our
                extensive freight management services. We can work to help
                you calculate shipping cost for your mailings and reduce
                them even further. Read on for more details on each freight
                shipping calculator.
            </p>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-sm-4 text-center">
                <br>
                <i class="eloji eloji-calc orange fs-200"></i>
                <br>
                <br>
                <br>
                <a href="{{ route('rate-calculator') }}" class="btn btn-primary">
                    CALCULATE UPS &amp; FEDEX RATES
                </a>
            </div>
            <div class="col-sm-8">
                <h3>UPS &amp; FedEx Rates Calculator</h3>

                <p class="fs-20">
                    With this shipping rate calculator tool, you can easily generate UPS and/or FedEx rate sheets
                    for domestic transportation services. Input your selected carrier (UPS or FedEx) and service
                    type (ground, overnight or next day, two-day, three-day, etc.) into the shipping cost calculator.
                    If a minimum charge applies, include it in the field provided on the shipping calculator. You may
                    also enter any applicable discounts, including all customer discounts, revenue discounts and
                    deferred discounts in the freight shipping calculator tool. Discounts can be applied to all
                    weights, if appropriate, or can be applied to specific weight breaks in the shipping calculator.
                    Click "Generate Report" and your carrier rate report will be returned, along with links to the
                    printable and CSV version as well. A freight and parcel audit consultant from Lojistic can help
                    you understand the results of your shipping cost calculator and help you to get the most out of
                    our shipping rate calculator.
                </p>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="col-sm-8">
                <h3>UPS &amp; FedEx Rates Comparison</h3>

                <p class="fs-20">
                    With this shipping costs calculator tool, it is easy to calculate shipping cost and compare
                    two sets of UPS and/or FedEx rate schedules for domestic transportation services. The Rate
                    Comparison Tool accounts for all variance in carrier rate schedules, so you can get a good
                    understanding of differences in price between the two carriers when you use this shipping
                    costs calculator. Start by choosing whether you want the freight costs calculator comparison
                    to display as dollars ($) or percentages (%). For the rates you are comparing, choose the carrier
                    (either FedEx or UPS), service type (ground, overnight or next day, two-day, three-day, etc.),
                    and any applicable minimum charge or carrier discounts (including custom discounts, revenue
                    discounts and deferred discounts) in the shipping rate calculator. Then, simply select Compare,
                    and this freight shipping calculator will generate the comparison report. A printable version and
                    downloadable CSV are also available for the report that you have created with this freight costs
                    calculator.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <br>
                <i class="eloji eloji-calc-rates orange fs-200"></i>
                <br>
                <br>
                <br>
                <a href="{{ route('comparison-calculator') }}" class="btn btn-primary">
                    COMPARE UPS &amp; FEDEX RATES
                </a>
            </div>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-sm-4 text-center">
                <br>
                <i class="eloji eloji-dim orange fs-200"></i>
                <br>
                <br>
                <br>
                <a href="{{ route('dim-calculator') }}" class="btn btn-primary">
                    DIMENSIONAL WEIGHT CALCULATOR
                </a>
            </div>
            <div class="col-sm-8">
                <h3>Dimensional Weight Charge Calculator</h3>

                <p class="fs-20">
                    With our Dimensional (DIM) Weight calculator, you can quickly and easily determine the impact of
                    the recent DIM weight changes on your day-to-day packing and shipping operations. Input the length,
                    width, and height of some of your standard box sizes into the fields provided. Then, input the
                    average weight of your typical shipments for the aforementioned standard box size. Lastly, enter
                    your approximate monthly volume and select your carrier. If you’d like to enter your carrier
                    discount, minimum charge, or DIM divisor, click “Show Advanced Options” to unlock these fields.
                    Click “Calculate” to generate a custom on-screen report that outlines the impact of the recent DIM
                    changes. You are able to toggle the results based on zone by clicking on the “ZONE 5” dropdown and
                    selecting another zone. Your results are shown on a monthly basis, with that data extrapolated over
                    a year to show your annualized impact analysis.
                </p>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            <div class="col-sm-8">
                <h3>Annual Insurance Cost Calculator</h3>

                <p class="fs-20">
                    Our super simple shipping insurance calculator can easily show how much you could save by using
                    our declared value insurance instead of your carrier’s default insurance. Simply enter your average
                    shipment value (in dollars) and the number of packages with this value shipped per month and click
                    “Calculate Savings.” Your results will be displayed below and will show your standard carrier
                    insurance rates alongside our discounted rates. If you’d like to edit the unit cost or minimum
                    fee per shipment, feel free to do so below the “Standard Carrier Rate” box. Your annualized savings
                    will be displayed alongside a monthly graph showing your cumulative insurance spending. This graph
                    shows your carrier insurance rates, our insurance rates, and your potential savings.
                </p>
            </div>
            <div class="col-sm-4 text-center">
                <br>
                <i class="eloji eloji-calc-insurance orange fs-200"></i>
                <br>
                <br>
                <br>
                <a href="{{ route('insurance-calculator') }}#insurance-calculator" class="btn btn-primary">
                    SHIPPING INSURANCE CALCULATOR
                </a>
            </div>
        </div>
    </section>

@stop
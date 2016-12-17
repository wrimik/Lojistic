@extends('layouts.internal')
@section('content')
        <!-- INTRO -->
<section class="brightBlue">
    <div class="container">
        <article>
            <h1 class="text-center">
                Lojistic Components <br>
                <small>View Blade Source For Code Samples</small>
            </h1>
            <p>
                This page acts as a showcase for available reusable components. If you view the components.blade
                source,
                you can see the best way to implement these items. Some are reusable blade templates, other items
                (like articles) would be impractical to abstract, and are given as examples.
            </p>

            <h3>Enjoy!</h3>
        </article>
    </div>
</section>
<!-- END INTRO -->

<!-- PRODUCT 321 -->
<section class="white">
    <div class="container">
        <h2 class="text-center green">
            Product<br>
            <small>Three Two One</small>
        </h2>
        <div class="row">
            <div class="col-sm-4">
                @include('parts.snippets.social-circles', array(
                'circleSize'=>'circ-150',
                'elojiSize' => 'fs-72',
                'eloji' => 'eloji-mouse',
                'color' => 'green',
                'title'=>'CLICK',
                'text'=>'Free sign up, login & ship.<br> It’s that simple.' ))

            </div>
            <div class="col-sm-4">
                @include('parts.snippets.social-circles', array(
               'circleSize'=>'circ-150',
               'elojiSize' => 'fs-72',
               'eloji' => 'eloji-box-open-alt',
               'color' => 'green',
               'title'=>'SHIP',
               'text'=>'Use your UPS & Fedex rates.<br>Compare, ship, and save.' ))
            </div>
            <div class="col-sm-4">
                @include('parts.snippets.social-circles', array(
                'circleSize'=>'circ-150',
                'elojiSize' => 'fs-72',
                'eloji' => 'eloji-chillin',
                'color' => 'green',
                'title'=>'DONE',
                'text'=>'Bask in the glow of shipping<br>greatness...all for free.' ))
            </div>
        </div>
        <div class="row">
            <div class="col-centered col-xs-4 col-xs-offset-4">
                <a href="/shipping-software/sign-up" class="btn btn-lg green text-center">
                    FREE SIGN UP
                </a>
            </div>
        </div>
    </div>
</section>
<!-- END PRODUCT 321 -->


<!-- POGS -->
<section class="flatBlue">
    <div class="container">
        <h2 class="white">POGS</h2>
        @for($n = 0; $n < 4; $n++)
            <div class="col-xs-3">
                @include('parts.snippets.pog', array(
                    'img' => '/images/UPS-FedEx-5Secrets.png',
                    'desc'=> 'Pogs flip to reveal a hidden message',
                    'url' => '/pdf/5-Secrets-UPS-&-FedEx-Dont-Want-You-to-Know.pdf',
                    'linkAttr' => 'download',
                    'title' => 'Pogs Flip',
                    'btnClass' => 'btn-info',
                    'btnTxt' => 'DOWNLOAD',
                    'neverShowOn' => 'white-papers/5-secrets-thank-you'
                ))
            </div>
        @endfor
    </div>
</section>
<!-- END POGS -->


<!-- TABLES -->
<section class="white">
    <div class="container">
        <h2>Tables</h2>

        <div class="col-sm-12">
            <h3>Checkered Table</h3>

            <p>
                Apply <code>.table-checkered</code> to any table. Table must have
                <code>&lt;thead&gt;&lt;/thead&gt;</code>and<code>&lt;tbody&gt;&lt;/tbody&gt;</code> to format properly
                <br/>
                <code>.more</code> and <code>.less</code> can be applied to
                <code>&lt;td&gt;&lt;/td&gt;</code> elements for color variants.
            </p>
            <table class="table-checkered">
                <thead>
                <tr>
                    <th>Company</th>
                    <th>Catch Phrase</th>
                    <th>Contact</th>
                    <th>Domain Name</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Employees</th>
                </tr>
                </thead>
                <tbody>
                <?php $faker = \Faker\Factory::create(); ?>
                @for($i = 1; $i< 10; $i++)
                    <tr>
                        <td>{{ $faker->company }}</td>
                        <td>{{ $faker->catchPhrase }}</td>
                        <td nowrap>{{ $faker->firstName .' '.$faker->lastName}}</td>
                        <td>{{ $faker->domainName }}</td>
                        <td>{{ $faker->city }}</td>
                        <td>{{ $faker->stateAbbr }}</td>
                        <td class="{{ $faker->randomElement(['more','less']) }}">{{ $faker->numberBetween(5,100) }}</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
        <div class="col-sm-12">
            <h3>Legend Table</h3>

            <p>
                Apply <code>.table-legend</code> to any table.
                <br/>
                <code>.more</code> and <code>.less</code> can be applied to
                <code>&lt;td&gt;&lt;/td&gt;</code> elements for color variants.
            </p>
            <table class="table-legend">
                <tbody>
                <tr>
                    <td scope="row"><i class="eloji-reporting"></i></td>
                    <td class="less" nowrap>{{$faker->company}}</td>
                    <td>{{ $faker->paragraph(4) }}</td>
                </tr>
                <tr>
                    <td scope="row"><i class="eloji-logistics"></i></td>
                    <td class="more" nowrap>{{$faker->company}}</td>
                    <td>{{ $faker->paragraph(4) }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- END TABLES -->

<!-- SHAPES -->

<section class="flatCream">
    <div class="container">
        <h2>Shapes</h2>

        <div class="col-sm-4 text-center">
            <h3>".tri .tri-{size} ( style="border-top-color:{color}")"</h3>

            <div class="row">
                <div class="col-xs-6">
                    <div class="tri tri-20 flatGrey" style="border-top-color:#898989"></div>
                    <br>
                    <code>.tri .tri-20</code>
                </div>
                <div class="col-xs-6">
                    <div class="tri tri-20 flatGrey" style="border-top-color:#898989"></div>
                    <br>
                    <code>.tri .tri-left-20</code>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="tri tri-20 flatGrey" style="border-top-color:#898989"></div>
                    <br>
                    <code>.tri .tri-right-20</code>
                </div>
                <div class="col-xs-6">
                    <div class="tri tri-20 flatGrey" style="border-top-color:#898989"></div>
                    <br>
                    <code>.tri .tri-up-20</code>
                </div>
            </div>
        </div>

        <div class="col-sm-4 text-center">
            <h3>".circ .circ-{size}"</h3>

            <div class="row">
                <div class="col-xs-6">
                    <div class="circ circ-20 flatGrey"></div>
                    <code>.circ .circ-20</code>
                </div>
                <div class="col-xs-6">
                    <div class="circ circ-75 flatGrey"></div>
                    <code>.circ .circ-75</code>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="circ circ-50 flatGrey"></div>
                    <code>.circ .circ-50</code>
                </div>
                <div class="col-xs-6">
                    <div class="circ circ-30 flatGrey"></div>
                    <code>.circ .circ-30</code>
                </div>
            </div>
        </div>
        <div class="col-sm-4 text-center">
            <h3>".quare-{size}"</h3>

            <div class="row">
                <div class="col-xs-6">
                    <div class="square-10 flatGrey"></div>
                    <br>
                    <code>.square-10</code>
                </div>
                <div class="col-xs-6">
                    <div class="square-20 flatGrey"></div>
                    <br>
                    <code>.square-20</code>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="square-30 flatGrey"></div>
                    <br>
                    <code>.square-30</code>
                </div>
                <div class="col-xs-6">
                    <div class="square-50 flatGrey"></div>
                    <br>
                    <code>.square-50</code>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 text-center">
        <h2>Combine This With Elojis For Max Radness!</h2>
        <div>
            <div class="circ circ-100 brightBlue text-center">
                <i class="eloji eloji-box-open-alt fs-56 text-vc white"></i>
            </div>
            <p>Inline Stuff</p>
        </div>
        <div>
            <a href="#adf" class="circ circ-100 brightBlue text-center">
                <i class="eloji eloji-box-open-alt fs-56 text-vc white"></i>
            </a>
            <p>Links</p>
        </div>
    </div>
</section>

<!-- END SHAPES -->

<!-- POSTITS -->
<section class="white">
    <div class="container">
        <h2>Postits / Features</h2>

        <div class="col-sm-6 col-xs-12 np-xs">
            <div class="postit flatGrey">
                <div class="col-xs-2 text-center np">
                    <br><i class="eloji eloji-train fs-24"></i>
                </div>
                <div class="col-xs-10 white">
                    <div class="p-30">
                        <p class="navy"><b>Postit Title:</b></p>

                        <p class="navy fs-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Adipisci consequuntur dignissimos ea eaque harum repellat, sapiente? Adipisci
                            aperiam beatae commodi dignissimos dolore, enim magnam nisi obcaecati quaerat
                            rerum, vero voluptate!</p>
                    </div>
                </div>
            </div>
            <div class="postit red">
                <div class="col-xs-2 text-center np">
                    <br><i class="eloji eloji-train fs-24"></i>
                </div>
                <div class="col-xs-10 white">
                    <div class="p-30">
                        <p class="navy"><b>Postit Title:</b></p>

                        <p class="navy fs-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Adipisci consequuntur dignissimos ea eaque harum repellat, sapiente? Adipisci
                            aperiam beatae commodi dignissimos dolore, enim magnam nisi obcaecati quaerat
                            rerum, vero voluptate!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12 np-xs">
            <div class="postit orange">
                <div class="col-xs-2 text-center np">
                    <br><i class="eloji eloji-train fs-24"></i>
                </div>
                <div class="col-xs-10 white">
                    <div class="p-30">
                        <p class="navy"><b>Postit Title:</b></p>

                        <p class="navy fs-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Adipisci consequuntur dignissimos ea eaque harum repellat, sapiente? Adipisci
                            aperiam beatae commodi dignissimos dolore, enim magnam nisi obcaecati quaerat
                            rerum, vero voluptate!</p>
                    </div>
                </div>
            </div>
            <div class="postit flatSeafoam">
                <div class="col-xs-2 text-center np">
                    <br><i class="eloji eloji-train fs-24"></i>
                </div>
                <div class="col-xs-10 white">
                    <div class="p-30">
                        <p class="navy"><b>Postit Title:</b></p>

                        <p class="navy fs-16">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Adipisci consequuntur dignissimos ea eaque harum repellat, sapiente? Adipisci
                            aperiam beatae commodi dignissimos dolore, enim magnam nisi obcaecati quaerat
                            rerum, vero voluptate!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END POSTITS-->


<!-- PADDELS -->
<section title="paddles">
    <div class="container">
        <div class="col-sm-4">
            @include('parts.snippets.paddle', array('text'=>'These Are Paddles', 'eloji' => 'eloji-paper-sign'))
        </div>
        <div class="col-sm-4">
            @include('parts.snippets.paddle', array('text'=>'They Are Sweet', 'eloji' => 'eloji-paper-audit'))
        </div>
        <div class="col-sm-4">
            @include('parts.snippets.paddle', array('text'=>'When Circles Look Bad', 'eloji' => 'eloji-rain'))
        </div>
    </div>
</section>
<!-- END PADDLES -->


<!-- Progress animation -->
<section class="white">
    <div class="container">
        <div class="col-xs-6">
            <h3>Progress Meter + Transition-On-Show</h3>
            <div class="progress-meter flatGrey">
                <div class="progress-indicator transition-on-show"
                     data-transition-to="opacity:1; width:50%; background-color:#fff"></div>
            </div>
        </div>
        <div class="col-xs-4 col-xs-offset-2">
            <h2>Pinnochio</h2>
            <div class="peetnochio">
                <img src="/svgs/peetnochio-face.svg" alt="Never tell a lie"/>

                <div class="peetnochio-nose transition"></div>
            </div>
            <!-- js  $('.pinnochio .pinnochio-nose').css('width', '+=25')  -->
        </div>
    </div>
</section>

<section class="np-sm np-md np-lg text-center flatCream">
    <div class="col-sm-3 col-xs-12 text-vc fw-thin">
        <span class="fs-60">Q1</span><br/>
        <span class="fs-28">2014</span><br/>
        <span class="fs-24">donations</span><br/><br/>
        <span class="fs-28">$7,840</span><span class="fs-20">.00</span><br/>
        <a href="https://my.charitywater.org/20-20-Q12014" class="fs-20">Campaign 1</a><br/>
        <a href="https://my.charitywater.org/2020-campaign-q1-2014-extra" class="fs-20">Campaign 2</a><br/>
        <a href="http://www.charitywater.org/projects/countries/rwanda/" class="fs-20">See The Impact</a><br/>
        <br/>
    </div>
    <div class="col-sm-9 hidden-xs np">
        <img src="/images/2020/rwanda.jpg" class="pull-right" alt=""/>
    </div>
</section>
<section class="np visible-xs">
    <img src="/images/2020/rwanda.jpg" class="pull-right" alt=""/>
</section>


<section class="np-md np-lg flatBlue">
    <div class="col-xs-12 col-md-6 text-vc">
        <div class="col-lg-9 col-md-12 col-sm-12 col-sm-offset-1 col-xs-12 pull-right">
            <span class="fs-36 white  col-sm-11">50 50 Section</span>

            <p class="fs-16 col-sm-11">
                Some companies &quot;ship a lot of stuff&quot;. We at Lojistic
                help those companies reduce their shipping costs.
                Every time one of these companies gives us
                20 minutes to introduce ourselves, we will donate
                20 dollars to fund clean water projects in developing
                countries. We hope to donate $100,000.00
            </p>
        </div>
    </div>
    <img class="col-sm-6 np pull-right hidden-sm hidden-xs" src="/images/2020/2020-how-it-works.jpg" alt=""/>
</section>

<section class="flatGrey">  <!-- Call to action -->
    <div class="container">
        <div class="col-sm-8">
            <h3 class="white text-left">
                Need a call to action that doesn't have a lot
                of frills? See if this one does the trick!
            </h3>
        </div>
        <div class="col-sm-4 text-vc">
            <a class="btn btn-info btn-lg" href="/pdf/Lojistic-Ad-Hoc-Report-Guide.pdf" download>
                <i class="eloji-download"></i>
                TRY IT NOW
            </a>
        </div>
    </div>
</section>


<!--  DESCRIPTION SECTION   -->
<section class="white">
    <div class="container">
        <h2>Informative Description Section</h2>

        <div class="col-sm-4 text-center">
            <br/>
            <i class="eloji eloji-freight orange fs-200"></i>
        </div>
        <div class="col-sm-8">
            <p class="fs-24">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Deserunt dolore dolores dolorum fugiat iusto odio tempora unde.
                A accusantium iure magni possimus quae voluptates. Blanditiis enim ipsam
                necessitatibus quaerat reiciendis.
            </p>

            <p class="fs-16">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Deserunt dolore dolores dolorum fugiat iusto odio tempora unde.
            </p>

            <p class="fs-16 fw-bold">
                <a class="btn btn-success" href="/freight-management">
                    IMPROVE CARRIER RATES
                </a>
            </p>
        </div>
    </div>
</section>
<!--  END DESCRIPTION SECTION   -->


<!--  Insurance  -->
<section class="silver">
    <div class="container">
        <h2>Discount Parcel Shipping Insurance Coverage </h2>

        <div class="col-sm-8">
            <p class="fs-24">
                Our full coverage shipping insurance solution is offered at a substantial discount to the carrier’s
                Declared Value rates. We have simplified the shipping insurance experience to offer you tremendous
                value and savings.
            </p>

            <p class="fs-16">
                UPS & FedEx declared value insurance is limited and expensive. Our shipping insurance is easy to use
                and offers huge savings.
            </p>

            <p class="fs-16 fw-bold">
                <a class="btn btn-success" href="/shipping-insurance">
                    REDUCE INSURANCE COSTS
                </a>
            </p>
        </div>

        <div class="col-sm-4 text-center">
            <br/>
            <i class="eloji eloji-insurance flatBlue fs-200"></i>
        </div>
    </div>
</section>

<section class="white hidden-xs">
    <div class="container">
        <h2>Have you compared things lately?</h2>
        <table class="comparison-table fs-16 col-xs-12">
            <thead class="blue">
            <tr>
                <th>FEATURES</th>
                <th>Bad Option</th>
                <th>Lojistic's Good Option</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Minimum Fee</td>
                <td>$2.70</td>
                <td>
                    <i class="eloji eloji-check green"></i>
                    No Minumum
                </td>
            </tr>
            <tr>
                <td>Rates</td>
                <td>90&cent; per $100 Covered</td>
                <td>
                    <i class="eloji eloji-check green"></i>
                    55-92% Less Than Your Current Costs
                </td>
            </tr>
            <tr>
                <td>Coverage</td>
                <td>Restricted</td>
                <td>
                    <i class="eloji eloji-check green"></i>
                    Most Items Covered
                </td>
            </tr>
            <tr>
                <td>CLAIMS</td>
                <td>Total pain in the ass</td>
                <td>
                    <i class="eloji eloji-check green"></i>
                    Simplified Paperless Process
                </td>
            </tr>
            <tr>
                <td>True All Risk Insurance</td>
                <td>No</td>
                <td>
                    <i class="eloji eloji-check green"></i>
                    <i>Yes!</i>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
<!--  People  -->
<section class="flatGrey">
    <div class="container text-center">
        <h2 class="white">Are you in...</h2>
    </div>
    <div id="roles" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#roles" data-slide-to="0" class="active"></li>
            <li data-target="#roles" data-slide-to="1"></li>
            <li data-target="#roles" data-slide-to="2"></li>
            <li data-target="#roles" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @include('parts.carousel-slide', array(
                'active' => 'active',
                'eloji' => 'eloji-money-bag',
                'title'=> 'Finance',
                'desc'  => '<p>
                                Our services will help you manage all shipping costs with a scalable service.
                            </p>
                            <p>
                                Gain control over your shipping expenses, ensuring that all invoices are accurate and the
                                carrier payment process is streamlined. With centralized visibility and reporting over your
                                carrier invoices, you can be confident that the carriers are held accountable for services
                                rendered.
                            </p>'
            ))

            @include('parts.carousel-slide', array(
                'eloji' => 'eloji-handshake',
                'title' => 'Sales',
                'desc'  => '<p>Our team can help you identify and manage new profit centers.</p>
                            <p>Through our contract negotiation services we are able to target potential saving opportunities that will allow you to turn what was a former money loss into a profit center. How much would your numbers jump if you could offer free shipping to your customers?</p>'
            ))
            @include('parts.carousel-slide', array(
                'eloji' => 'eloji-logistics',
                'title' => 'Distribution',
                'desc'  => '<p>Let us aid in the planning, management, and orchestration of all shipping activities.</p>
                            <p>No matter your transportation mix, our comprehensive suite of services will put you in the driver’s seat, with complete control over every shipment, no matter the carrier or mode. From spot quotes to improved freight rates, shipping and tracking software, we can help you manage your ever-evolving shipping business.</p>'
            ))
            @include('parts.carousel-slide', array(
                'eloji' => 'eloji-cart',
                'title' => 'Procurement',
                'desc'  => '<p>Automated purchasing compliance ensures the smartest decisions are made, every time.</p>
                            <p>Our team can help maximize compliance by taking the guesswork out of the purchasing process. With our insight, you can ensure that the smartest and most cost-effective purchasing decisions are made every time.</p>'
            ))
            {{-- if you're going to add more slides, add another indicator above --}}
        </div>

        <!-- Controls -->
        <a class="left text-left carousel-control" href="#roles" role="button" data-slide="prev">
            <i class="tri tri-50 flatBlack pull-left" style="border-right-color:#898989"></i>
        </a>
        <a class="right carousel-control" href="#roles" role="button" data-slide="next">
            <i class="tri tri-50 flatBlack pull-right" style="border-left-color:#898989"></i>
        </a>
    </div>
</section>

<section class="silver">
    <div class="container text-center">
        <h2>Tracking Stuff!</h2>

        <div class="btn btn-primary" data-anal="TestCategory|Test Event">I Show Up In Analytics!</div>
    </div>
</section>

<!--  End People   -->
<section>
    <div class="container">
        @include('parts.forms.contact-or-schedule', array(
            'scheduleTitle' => 'CALL TO ACTION',
            'scheduleText'  => 'This Supporting Text Clarifies The Call To Action For The User',
            'scheduleBtnText' => 'BUTTON TEXT',
            'formVars' => array(
                'thankyouPage' => '/thank-you',
                'intent' => 'Usually A Product',
                'btnTxt' => 'MORE BUTTON TEXT',
                'formID' => '123'
            )
        ))
    </div>
</section>

@stop
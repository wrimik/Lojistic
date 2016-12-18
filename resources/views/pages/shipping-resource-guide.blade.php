@extends('layouts.flat')
@section('content')
    <section class="banner flatBlue">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-noggin"></i>
            </div>
            <div class="col-sm-9 col-xs-12">
                <h1 class="white">Informative White Papers</h1>
            </div>
        </div>
    </section>
    <section class="silver">
        <div class="container">
            <div id="five-secrets" class="postit flatBlue">
                <div class="text-center np" style="line-height:10px">
                    <span class="flatBlue fs-16">_</span>
                </div>
                <div class="white container p-30  text-center">
                    <div class="col-sm-4 col-xs-12">
                        <br>
                        <a download
                           rel="nofollow" href="/pdf/5-Secrets-UPS-&-FedEx-Dont-Want-You-to-Know.pdf"
                           data-anal="SRG|5S-Download">
                            <img class="" alt="5 Secrets UPS &amp; FedEx Don't Want You To Know"
                                 src="/images/UPS-FedEx-5Secrets.png"
                                 data-anal="SRG|5S-Download">
                        </a>
                        <br>
                    </div>
                    <div class="col-sm-8 col-xs-12">

                        <h2>5 Secrets UPS & FedEx <br> Don't Want You To Know</h2>

                        <p>
                            Learn tips and tricks from industry experts on how to reduce the excessive cost of
                            shipping.
                            Get to
                            know the secrets to reducing shipping costs and how to navigate these strategies.
                        </p>

                        <p class="text-center">
                            <a download class="btn btn-success btn-md"
                               rel="nofollow" href="/pdf/5-Secrets-UPS-&-FedEx-Dont-Want-You-to-Know.pdf"
                               data-anal="SRG|5S-Download">
                                <i class="fa fa-download"></i>
                                DOWNLOAD THE 5 SECRETS REPORT
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div id="gpi" class="postit flatBlue">
                <div class="text-center np" style="line-height:10px">
                    <span class="flatBlue fs-16">_</span>
                </div>
                <div class="white container p-30  text-center">
                    <div class="col-sm-4 col-xs-12">
                        <br>
                        <a download rel="nofollow" href="/pdf/UPS-Fedex-General-Price-Increase-History.pdf"
                           data-anal="SRG|GPI-Download">
                            <img alt="UPS &amp; FedEx General Price Increases" src="/images/GPI.png">
                        </a>
                        <br>
                    </div>
                    <div class="col-sm-8 col-xs-12">

                        <h2>UPS &amp; FedEx General <br>Price Increase History</h2>

                        <p>
                            UPS &amp; FedEx rates have increased 54.9%-66.1% over the past decade. This report contains the history of
                            each UPS and FedEx price increase since 2008 and valuable insight on the impact to your
                            company.
                        </p>

                        <p class="text-center">
                            <a download class="btn btn-success btn-md"
                               rel="nofollow" href="/pdf/UPS-Fedex-General-Price-Increase-History.pdf"
                               data-anal="SRG|GPI-Download">
                                <i class="fa fa-download"></i>
                                DOWNLOAD THE GPI HISTORY
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div id="fuel-surcharge" class="postit flatBlue">
                <div class="text-center np" style="line-height:10px">
                    <span class="flatBlue fs-16">_</span>
                </div>
                <div class="white container p-30  text-center">
                    <div class="col-sm-4 col-xs-12">
                        <br>
                        <a download
                           rel="nofollow" href="/pdf/UPS-Fedex-Fuel-Surcharge-History.pdf"
                           data-anal="SRG|FS-Download">
                            <img alt="UPS and FedEx Fuel Surcharges Report" src="/images/Fuel_Surcharge.png">
                        </a>
                        <br>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <h2>UPS &amp; FedEx <br> Fuel Surcharge History</h2>

                        <p>
                            Need to know what your carrier’s fuel surcharge used to be? This report contains a
                            historical record of the fluctuations in air and ground fuel surcharges over the past two
                            years.
                        </p>

                        <p class="text-center">
                            <a download class="btn btn-success btn-md"
                               rel="nofollow" href="/pdf/UPS-Fedex-Fuel-Surcharge-History.pdf"
                               data-anal="SRG|FS-Download">
                                <i class="fa fa-download"></i>
                                DOWNLOAD THE FUEL SURCHARGE HISTORY
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="white">
        <div class="container">
            @include('parts.contact-info')
        </div>
    </section>
@stop
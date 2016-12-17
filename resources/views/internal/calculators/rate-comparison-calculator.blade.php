@extends('layouts.internal')
@section('page-title')
    Rate Comparison Calculator
@overwrite
@section('content')
    <section>
        <div class="container">
            <h1 class="text-center navy">UPS & FedEx Rates Comparison Calculator</h1>

            {!! Form::open(['class'=>'calculator ajax', 'data-success-html' => '#calc-results', 'data-scroll-target' => '#submit-scroll-stop'])  !!}

                    <!-- Carrier-Rate Forms -->
            <!-- Section A -->
            <div class="comparison-section">
                <div class="comparison-label red">
                    A
                </div>
                <div class="comparison-form">
                    @include('internal.calculators.parts.rate-comparison-chunk', ['comparison'=>1, 'rateCompare'=>'rate'])
                </div>
            </div>
            <!-- /Section A -->

            <!-- Section B -->
            <div class="comparison-section">
                <div class="comparison-label flatBlue">
                    B
                </div>
                <div class="comparison-form">
                    @include('internal.calculators.parts.rate-comparison-chunk', ['comparison'=>2, 'rateCompare'=>'compare'])
                </div>
            </div>
            <!-- /Section B -->
            <!-- /Carrier-Rate Forms -->

            <div class="row">
                <button class="col-md-6 col-md-offset-3 col-xs-offset-1 col-xs-10 btn btn-primary fs-28"
                        data-target="#submit-scroll-stop" type="submit">COMPARE RATES
                </button>
            </div>
            <!-- This is where we stop scrolling on submit -->
            <div id="submit-scroll-stop"></div>


            </form>
            <!-- Calculator Results -->
            <div id="calc-results"></div>
        </div>
    </section>
@stop
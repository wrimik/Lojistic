@extends('layouts.internal')
@section('page-title')
    Internal Calculators
@overwrite
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a class="product-card" rel="nofollow" href="/internal/calculators/rate-calculator">
                        <i class="eloji eloji-xl eloji-calc"></i>
                        <div class="card-content">
                            <h2 class="card-header">UPS &amp; FedEx Rates Calculator</h2>
                            <h3 class="card-description">Generate A Custom Rate Sheet</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a class="product-card" rel="nofollow" href="/internal/calculators/rate-comparison-calculator">
                        <i class="eloji eloji-xl eloji-calc-rates"></i>
                        <div class="card-content">
                            <h2 class="card-header">UPS &amp; FedEx Rates Comparison</h2>
                            <h3 class="card-description">Compare UPS &amp; FedEx Rates</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@stop
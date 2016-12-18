@extends('layouts.internal')
@section('content')
    @if(Cookie::get('intraloj') == $_ENV['INTERNAL_PASSWORD'])
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a class="product-card" rel="nofollow" href="/internal/calculators/">
                            <i class="eloji eloji-xl eloji-calc"></i>

                            <div class="card-content">
                                <h2 class="card-header">Calculators</h2>

                                <h3 class="card-description">Quick Calculators Without The Fuss Of A Contact Form</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a class="product-card" rel="nofollow" href="/internal/components">
                            <i class="eloji eloji-xl eloji-data-management"></i>

                            <div class="card-content">
                                <h2 class="card-header">Components</h2>

                                <h3 class="card-description">Lojistic's Web Components</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section>
            <div class="row">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::open()  !!}
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="text-center">Please Enter Your Passphrase For Admittance</h2>
                            </div>
                            @if(Session::has('message_error'))
                                <div class="col-sm-offset-2 col-sm-8">
                                    <div class="alert alert-danger">
                                        <h3 class="text-center">
                                            <i class="eloji eloji-caution"></i>
                                            {{ Session::get('message_error') }}
                                        </h3>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-8">
                                <input name="intraloj_password" id="intraloj_password" type="password"
                                       class="col-sm-12 input-lg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-offset-2 col-sm-8">
                                <button class="btn btn-primary btn-lg btn-block">
                                    <i class="eloji eloji-hi"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close()  !!}
                </div>
            </div>
        </section>
    @endif
@stop
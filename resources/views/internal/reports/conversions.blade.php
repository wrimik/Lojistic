@extends('layouts.flat')
@section('content')
    <section class="white">
        <div class="container">
            <h2>
                Conversions Year Over Year
            </h2>
            <div class="col-sm-6 col-sm-offset-3">
                {{ dd($data) }}
            </div>
        </div>
    </section>
@stop
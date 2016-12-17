@extends('layouts.flat')
@section('content')
    <section class="white">
        <div class="container text-center">
            @if($valid)
                <h1>
                    Welcome! <br>
                    <small>Click The Blue Button Below To Download Your File</small>
                </h1>
                <a target="_blank" download href="/your-accounts/download/?l={{ $l }}" class="btn btn-success btn-md flatBlue download">
                    <i class="eloji eloji-download"></i>
                    DOWNLOAD
                </a>
            @else
                <img alt="Audisee Parcel Audit" src="/images/test-audit/robot.png">
                <h1 class="red">
                    Ouch! <br>
                    <small>That link is bad. I hope you didn't just make up that URL.</small>
                </h1>
            @endif
        </div>
    </section>
@stop
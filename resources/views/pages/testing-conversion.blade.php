@extends('layouts.minimal-conversion')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'Wholesale LTL Freight Marketplace',
        'description' => 'Stop getting slapped with unnecessary charges and try our Dimensional Weight Calculator. Let’s put some of that money back in your pocket, where it belongs.',
        'keywords'    => 'FedEx and DIM, FedEx and UPS  Ground Rates, Dimensional Weight, DIM Calculator, FedEx and UPS Rate Calculator',
    ])
@overwrite
@section('styles')
    {{--{{ HTML::style('css/prod/pages/wholesale-ltl.css?v='.v()) }}--}}

@stop
@section('scripts')
    {{--{{ HTML::script('js/dim-cal.js') }}--}}

@stop
@section('content')
    <div class="minimal-form-body">
    <div class="container">
       <h1 class="text-center flatBlue">Placeholder Text <br><small> Subtitle text </small></h1>
    </div>
    <br>
        <br>
    <div class="container">
       <div class="col-md-7">
           <h3> Jon Paul Blank</h3>
           <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci amet consequatur consequuntur, cumque dolores facilis harum incidunt iste laudantium minima, minus nam nesciunt non pariatur quo tempore vel veniam voluptas.</p>
           <hr>
           <h3> Something Something</h3>
           <div class="one">
               <p><i class="eloji-check fs-20">&nbsp;</i> More Power</p>
           </div>
           <div class="one">
               <p><i class="eloji-check fs-20">&nbsp;</i> Stronger, Faster, Bolder</p>
           </div>
           <div class="one">
               <p><i class="eloji-check fs-20">&nbsp;</i> Royal with Cheese</p>
           </div>
           <div class="one">
               <p><i class="eloji-check fs-20">&nbsp;</i> Snoogans</p>
           </div>
           <h3>Get in Touch ASAP, cause you know</h3>
           <p> We do all of these things super well</p>


       </div>
       <div class="col-md-5">

           @include(
                'parts.conversion-form',
                array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'Contact',
                    'btnTxt' => 'Hell yea!!! Lets do this',
                    'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                )
            )
       </div>
    </div>
    </div>
@stop

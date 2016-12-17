
<!--  Products  -->
<section class="brightBlue" id="solutions">
    <div class="container">
        <div class="col-xs-12">
            <h2 class="white text-center">Now, let's reduce your shipping expenses.</h2>
            <br/>
        </div>
        <div class="col-sm-4 col-xs-12">
            @include('parts.snippets.pog', array(
                'eloji'=>'eloji-audit',
                'desc'=>'"Do my shipping invoices contain errors? Am I getting over-charged?"',
                'color'=>'navy',
                'url'=>'/parcel-freight-bill-audit',
                'title'=>'Parcel &amp;<br/>Freight Audit'
            ))
            <br/>
        </div>
        <div class="col-sm-4 col-xs-12">
            @include('parts.snippets.pog', array(
                'eloji'=>'eloji-negotiation',
                'desc'=>'"Can my shipping rates get better?"',
                'color'=>'flatGrey',
                'url'=>'/carrier-contract-negotiation',
                'title'=>'Carrier<br/>Negotiation'
            ))
            <br/>
        </div>
        <div class="col-sm-4 col-xs-12">
            @include('parts.snippets.pog', array(
                'eloji'=>'eloji-freight',
                'desc'=>'"What tools, resources and services can help better manage my freight?"',
                'color'=>'orange',
                'url'=>'/freight-management',
                'title'=>'Freight<br/>Management'
            ))
            <br/>
        </div>
        <div class="col-sm-4 col-xs-12">
            @include('parts.snippets.pog', array(
                'eloji'=>'eloji-insurance',
                'desc'=>'"Is there a better way to insure the contents of my parcel shipments?"',
                'color'=>'flatBlue',
                'url'=>'/shipping-insurance',
                'title'=>'Shipping<br/>Insurance'
            ))
            <br/>
        </div>
        <div class="col-sm-4 col-xs-12">
            @include('parts.snippets.pog', array(
                'eloji'=>'eloji-intelliship',
                'desc'=>'"I need a solution to automate my shipping processes and save money."',
                'color'=>'green',
                'url'=>'/shipping-software',
                'title'=>'Shipping<br/>Software'
            ))
            <br/>
        </div>
        <div class="col-sm-4 col-xs-12">
            @include('parts.snippets.pog', array(
                'eloji'=>'eloji-halo',
                'desc'=>'"I need centralized visibility and a better way to manage my shipments."',
                'color'=>'flatGrey',
                'url'=>'/halo',
                'title'=>'Tracking<br/>Software'
            ))
            <br/>
        </div>
    </div>
</section>
<!--  End Products  -->
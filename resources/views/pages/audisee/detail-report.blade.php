@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Instant Online UPS & FedEx Audit - Lojistic',
        'description' => 'Upload your carrier invoice to see the potential savings using our parcel audit test drive tool.',
        'keywords' => 'parcel audit, parcel test audit, parcel audit demo, reduce shipping costs, shipping audit',
    ])
@overwrite
@section('scripts')
    <script>
        $(document).ready(function(){
            Details.load('{{ $crypt_id or '' }}');
        });
        Details = new Vue({
            el: '#details-report',
            data: {
                AuditID: ''
            },
            methods:{
                load: function($AuditID){
                    if($AuditID){
                        this.AuditID = $AuditID;
                        $.get('/audisee/'+$AuditID+'/details')
                    }
                }
            }
        });
    </script>
@stop
@section('content')
    <section class="white">
        <div class="container">
            <h1 class="text-center">
                <img src="/images/audisee-logo.png" alt="Audisee">
                <br>
                <small>DETAIL REPORT</small>
            </h1>

            <div class="row">
                <b>
                    Late Shipments
                </b>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Tracking Number</th>
                        <th>Service Type</th>
                        <th>Charge Amount</th>
                        <th>Zone</th>
                        <th>Expected Transit Time</th>
                        <th>Ship Date</th>
                        <th>Expected Delivery Date</th>
                        <th>Actual Delivery Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="">
                        <td>Tracking Number</td>
                        <td>Service Type</td>
                        <td>Charge Amount</td>
                        <td>Zone</td>
                        <td>Expected Transit Time</td>
                        <td>Ship Date</td>
                        <td>Expected Delivery Date</td>
                        <td>Actual Delivery Date</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@stop
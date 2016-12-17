@extends('layouts.minimal-conversion')
@section('content')
    <script type="text/javascript">
        /**
         * Lojistic change of page warning
         */
        function doSubmit(thisform) {
            with (thisform) {
                var error = "";
                var amtsel = false;

                //All required fields need to be filled
                if (isNaN(amount.value) || amount.value == "" || amount.value == null)
                    error = error + "Invalid dollar amount.\n ";
                transaction_amount.value = amount.value;
                if (error != "") {
                    alert(error);
                    return false;
                }
                else {
                    subbut.disabled = true;
                    return true;
                }
            }
        }

        function roundNumber(num, dec) {
            var result = Math.round(num * Math.pow(10, dec)) / Math.pow(10, dec);
            return result;
        }
    </script>
    <section class="white">
        <div class="container">
            <style type="text/css" media="screen">
                .req {
                    color: red;
                }
            </style>

            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-default">
                    <div class="panel-trim flatBlue"></div>
                    <div class="panel-body same-height text-center">
                        <h4 class="fs-20 flatBlue">Enter A Payment Amount</h4>
                        <div class="row">
                            <form id="payment-form" method="POST" action="https://www.merchante-solutions.com/jsp/tpg/secure_checkout.jsp">

                                <div class="col-xs-6">
                                    <i class="eloji eloji-payment-alt fs-96 flatBlue"></i>
                                </div>
                                <div class="col-xs-5">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="basic-addon1">$</span>
                                            <input type="text" name="transaction_amount" value="" class="form-control"
                                                   placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success pull-left" value="Continue" name="subbut">
                                    </div>
                                </div>

                                <input type="hidden" name="profile_id" value="94100012463100000002">
                                <input type="hidden" name="css_url" value="{{ env('APP_DOMAIN') }}css/pay.css">
                                <input type="hidden" name="cancel_url" value="">
                                <input type="hidden" name="return_url" value="">
                                <input type="hidden" name="logo_url" value="https://lojistic.com/images/lojistic-logo.png">
                                <input type="hidden" name="footer_url" value="">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>
@stop
@extends('layouts.internal')
@section('page-title')
    <i class="eloji eloji-intelliship"></i> Intelliship
@overwrite
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title white">
                                <strong>
                                    {{ $user->contact_company }}
                                </strong>
                            </h3>
                        </div>
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a>
                            </li>
                            <li role="presentation">
                                <a href="#billing" aria-controls="billing" role="tab" data-toggle="tab">Billing</a>
                            </li>
                            <li role="presentation">
                                <a href="#accounts" aria-controls="accounts" role="tab" data-toggle="tab">Accounts</a>
                            </li>
                        </ul>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="contact">
                                    <div class="well">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <strong class="fs-36">{{ $user->name }}</strong> <br>
                                                <a href="mailto:{{ $user->contact_email }}">{{ $user->contact_email }}</a>
                                                <br>
                                                {{ $user->phonebusiness }}
                                            </div>
                                            <div class="col-sm-7">
                                                {{ $user->contact_address1 }} <br>
                                                {{ $user->contact_address2 }} <br>
                                                {{ $user->contact_city }}
                                                , {{ $user->contact_state }} {{ $user->contact_zip }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="billing">
                                    <div class="well">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                {{ $user->bill_address1 }} <br>
                                                {{ $user->bill_address2 }} <br>
                                                {{ $user->bill_city }}
                                                , {{ $user->bill_state }} {{ $user->bill_zip }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="accounts">
                                    <div class="well">
                                        <div class="row">
                                            @if($user->hasUps())
                                                <div class="col-sm-6">
                                                    <div class="col-sm-12"><h2><strong>UPS</strong></h2></div>
                                                    <div class="col-sm-6">Username:</div>
                                                    <div class="col-sm-6">
                                                        <strong>{{ $user->upswebusername }}</strong>
                                                    </div>
                                                    <div class="col-sm-6">Password:</div>
                                                    <div class="col-sm-6">
                                                        {{--<strong>{{ $user->upswebuserpassword }}</strong>--}}
                                                    </div>
                                                    <div class="col-sm-6">Account:</div>
                                                    <div class="col-sm-6">
                                                        <strong>{{ $user->upswebaccount }}</strong>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($user->hasFedex())
                                                <div class="col-sm-6">
                                                    <div class="col-sm-12"><h2><strong>FedEx</strong></h2></div>
                                                    <div class="col-sm-6">Username:</div>
                                                    <div class="col-sm-6">
                                                        <strong>{{ $user->fedex_username }}</strong>
                                                    </div>
                                                    <div class="col-sm-6">Password:</div>
                                                    <div class="col-sm-6">
{{--                                                        <strong>{{ $user->fedex_password }}</strong>--}}
                                                    </div>
                                                    <div class="col-sm-6">Account:</div>
                                                    <div class="col-sm-6">
                                                        <strong>{{ $user->fedexwebaccount }}</strong>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
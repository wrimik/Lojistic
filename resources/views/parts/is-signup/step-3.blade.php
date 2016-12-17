<div class="step animated">
    <div class="col-xs-10">
        <div class="panel panel-default">
            <div class="panel-trim green"></div>
            <div class="panel-body instructions-fedex">
                <h2 class="fw-thin text-center">
                    Securely Connect <br/>Your Favorite Carrier(s)<br/>
                    <span class="fs-12">(Step 3 of 3)</span>
                </h2>

                <div :class="{'expanded-content': using_ups}" class="input-group input-group-lg"
                     v-on:click="toggle('using_ups')">
                    <span class="input-group-addon" id="sizing-addon1">
                        <input name="using_ups"
                               v-model="using_ups"
                               id="using_ups" type="checkbox"
                               autocomplete="off"/>
                    </span>
                    <label class="form-control">Connect UPS</label>
                   <span class="input-group-addon" id="using_ups">
                       <!-- absolutely nuts. Chrome won't display this image unless you set it as a background to itself...  -->
                       <img src="/images/ups-logo.png" alt="UPS" height="21" width="24"
                            style="padding: 0px 12px;background-image: url(/images/ups-logo.png);background-size: 19px 21px;background-position: center;background-repeat: no-repeat;">
                    </span>
                </div>

                <div :class="{hidden: !using_ups}" id="ups_login" class="form-section same-height-parent">
                    <div class="col-xs-1 flatSeafoam text-center same-height"
                         style="box-sizing: content-box; min-height: 369px; padding: 0px; line-height: 56px;">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="col-xs-11 same-height form-section-content">
                        <div class="row np">
                            <div class="form-group col-xs-6">
                                <input name="is[upswebusername]"
                                       v-model="intelliship_user.upswebusername"
                                       type="text"
                                       class="form-control required"
                                       placeholder="UPS.com Username"
                                       title="This field is required"/>
                            </div>
                            <div class="form-group col-xs-6">
                                <input name="is[upswebuserpassword]"
                                       v-model="intelliship_user.upswebuserpassword"
                                       v-on:click="ups_credentials.loading = false"
                                       type="text"
                                       class="form-control required"
                                       placeholder="UPS.com Password"
                                       title="This field is required"/>
                            </div>
                        </div>
                        <div class="row np">
                            <div class="form-group col-xs-6">
                                <input name="is[upswebaccount]"
                                       v-model="intelliship_user.upswebaccount"
                                       type="text"
                                       class="form-control required"
                                       placeholder="Account Number"
                                       title="This field is required"/>
                            </div>
                            <div class="form-group col-xs-6">
                                {{--<div v-on="click: verifyUpsCredentials"--}}
                                     {{--class="btn btn-inline btn-success hidden"--}}
                                     {{--id="test-ups">--}}
                                    {{--TEST--}}
                                {{--</div>--}}
                                <!-- credentials valid icon -->
                                <i :class="{hidden: ups_credentials.loading,
                                        hidden: ups_credentials.pending,
                                        'eloji-check': ups_credentials.valid,
                                        green: ups_credentials.valid,
                                        'eloji-caution': !ups_credentials.valid,
                                        orange: !ups_credentials.valid}"
                                   class="eloji fs-24 pull-right"></i>
                                <!-- credentials loading gear -->
                                <i :class="{hidden: !ups_credentials.loading}"
                                   class="fa fa-spin fa-gear flatBlue fs-32 pull-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                <div :class="{'expanded-content': using_fedex}" class="input-group input-group-lg"
                     v-on:click="toggle('using_fedex')">
                    <span class="input-group-addon" id="sizing-addon1">
                        <input name="using_fedex"
                               v-model="using_fedex"
                               id="using_fedex" type="checkbox"
                               autocomplete="off"/>
                    </span>
                    <label class="form-control">Connect FedEx</label>
                   <span class="input-group-addon" id="using_fedex">
                      <img src="/images/fedex-logo.png" alt="FedEx" style="max-width: 43px;">
                    </span>
                </div>
                <div :class="{hidden: !using_fedex}" id="fedex_login" class="form-section  hidden">
                    <div class="col-xs-1 flatSeafoam text-center same-height"
                         style="box-sizing: content-box; min-height: 369px; padding: 0px; line-height: 56px;">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="col-xs-11 same-height form-section-content">
                        <div class="row np">
                            <div class="form-group col-xs-6">
                                <input name="is[fedex_username]"
                                       v-model="intelliship_user.fedex_username"
                                       type="text"
                                       class="form-control"
                                       placeholder="FedEx.com Username"/>
                            </div>
                            <div class="form-group col-xs-6">
                                <input name="is[fedex_password]"
                                       v-model="intelliship_user.fedex_password"
                                       type="text"
                                       class="form-control"
                                       placeholder="FedEx.com Password"/>
                            </div>
                        </div>
                        <div class="row np">
                            <div class="form-group col-xs-12">
                                <input name="is[fedexwebaccount]"
                                       v-model="intelliship_user.fedexwebaccount"
                                       type="text"
                                       class="form-control required"
                                       placeholder="FedEx Account Number"
                                       title="This field is required"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="fs-16 fw-thin flatGrey text-center">Note: Billing address must be *exactly* as it appears on your FedEx invoice</span>
                        </div>
                        <div class="row np">
                            <div class="form-group col-xs-12">
                                <input name="is[bill_address1]"
                                       v-model="intelliship_user.bill_address1"
                                       type="text"
                                       autocomplete="off"
                                       class="form-control required"
                                       placeholder="FedEx Billing Address"
                                       title="This field is required"/>
                            </div>
                            <div class="form-group col-xs-12">
                                <input name="is[bill_address2]"
                                       v-model="intelliship_user.bill_address2"
                                       type="text"
                                       autocomplete="off"
                                       class="form-control"
                                       placeholder="FedEx Billing Address 2"
                                       title="This field is required"/>
                            </div>
                        </div>
                        <div class="row np">
                            <div class="form-group col-xs-6">
                                <input name="is[bill_city]"
                                       v-model="intelliship_user.bill_city"
                                       type="text"
                                       autocomplete="off"
                                       class="form-control required"
                                       title="This field is required"/>
                            </div>
                            <div class="form-group col-xs-3">
                                <input name="is[bill_state]"
                                       autocomplete="off"
                                       type="text"
                                       v-model="intelliship_user.bill_state"
                                       class="form-control required"
                                       placeholder="State"/>
                            </div>
                            <div class="form-group col-xs-3">
                                <input name="is[bill_zip]"
                                       v-model="intelliship_user.bill_zip"
                                       type="text"
                                       autocomplete="off"
                                       class="form-control required"
                                       placeholder="Zip"
                                       title="This field is required"/>
                            </div>
                        </div>
                        <div class="row np">
                            <div class="form-group col-xs-7">
                                <select name="is[bill_country]"
                                        autocomplete="off"
                                        v-model="intelliship_user.bill_country"
                                        class="form-control required"
                                        placeholder="Country">
                                    @include('parts.snippets.country-options')
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group text-center">
                        <div class="col-xs-6">
                            <div class="btn btn-lg flatGrey prev-step">GO BACK</div>
                        </div>
                        <div class="col-xs-6">
                            <button type="button" v-on:click="submit"
                                    class="btn btn-lg green"
                                    data-anal="Intelliship-Signup|3-Submitted">
                                START SHIPPING!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="step animated">
    <div class="col-xs-10">

    <div class="panel panel-default">
        <div class="panel-trim green"></div>
        <div class="panel-body instructions-fedex">
            <h2 class="fw-thin text-center">
                What Address Will You Be Shipping From? <br/>
                <span class="fs-12">(Step 2 of 3)</span>
            </h2>
            {{-- fax required by IS server  --}}
            <input name="is[contact_fax]" v-model="intelliship_user.contact_fax" type="hidden" value="@{{ intelliship_user.phonebusiness }}"/>
            {{--fedex invoice must match fedex address --}}
            <div class="form-group">
                <input name="is[contact_company]"
                       v-model="intelliship_user.contact_company"
                       type="text"
                       class="form-control" placeholder="Company Name"/>
            </div>
            <div class="form-group">
                <input name="is[contact_address1]"
                       v-model="intelliship_user.contact_address1"
                       type="text"
                       class="form-control required"
                       placeholder="&quot;Ship From Address&quot;"
                       title="This field is required"/>
            </div>
            <div class="form-group">
                <input name="is[contact_address2]"
                       v-model="intelliship_user.contact_address2"
                       type="text"
                       class="form-control"
                       placeholder="&quot;Ship From Address&quot; 2"
                       title="This field is required"/>
            </div>
            <div class="row np">
                <div class="form-group col-xs-6">
                    <input name="is[contact_city]"
                           v-model="intelliship_user.contact_city"
                           type="text"
                           class="form-control required" placeholder="City"
                           title="This field is required"/>
                </div>
                <div class="form-group col-xs-3">
                    <input name="is[contact_state]"
                           v-model="intelliship_user.contact_state"
                           type="text"
                           class="form-control required" placeholder="State"
                           title="This field is required"/>
                </div>
                <div class="form-group col-xs-3">
                    <input name="is[contact_zip]"
                           v-model="intelliship_user.contact_zip"
                           type="text"
                           class="form-control required" placeholder="Zip"
                           title="This field is required"/>
                </div>
            </div>
            <div class="form-group">
                <select name="is[contact_country]"
                        v-model="intelliship_user.contact_country"
                        class="form-control required">
                    @include('parts.snippets.country-options')
                </select>
            </div>


            <div class="row">
                <div class="form-group text-center">
                    <div class="col-xs-6">
                        <div class="btn flatGrey btn-lg prev-step">GO BACK</div>
                    </div>
                    <div class="col-xs-6">
                        <button type="button" class="btn btn-lg green next-step"
                                data-anal="Intelliship-Signup|2-Company Info">
                            FINAL STEP
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
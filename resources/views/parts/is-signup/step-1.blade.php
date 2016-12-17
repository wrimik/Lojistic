<div class="step animated">
    <div class="col-xs-10">
        <div class="panel panel-default">
            <div class="panel-trim green"></div>
            <div class="panel-body instructions-fedex">
                <h2 class="fw-thin text-center">
                    Create A New Account <br>
                    <span class="fs-12">(Step 1 of 3)</span>
                </h2>

                <div class="row np">
                    <div class="form-group col-xs-6">
                        <input name="is[contact_firstname]"
                               v-model="intelliship_user.contact_firstname"
                               type="text"
                               class="form-control required"
                               placeholder="Your First Name"
                               title="This field is required "/>
                    </div>
                    <div class="form-group col-xs-6">
                        <input name="is[contact_lastname]"
                               v-model="intelliship_user.contact_lastname"
                               type="text"
                               class="form-control required"
                               placeholder="Your Last Name"
                               title="This field is required"/>
                    </div>
                </div>
                <div class="form-group">
                    <input name="is[contact_email]"
                           v-model="intelliship_user.contact_email"
                           type="email"
                           class="form-control required"
                           placeholder="Email (this will be your username)"
                           title="This field is required"/>
                </div>
                <div class="row np">
                    <div class="form-group col-xs-6">
                        <input name="is[contact_password]"
                               v-model="intelliship_user.contact_password"
                               type="password"
                               class="form-control required password-a"
                               placeholder="6+ Character Password"
                               title="This field is required"/>
                    </div>
                    <div class="form-group col-xs-6">
                        <input name="is[contact_confirmpassword]"
                               v-model="intelliship_user.contact_confirmpassword"
                               type="password"
                               class="form-control required password-b"
                               placeholder="Confirm Password"
                               title="This field is required"/>
                    </div>
                </div>
                <div class="form-group">
                    <input name="is[phonebusiness]"
                           v-model="intelliship_user.phonebusiness"
                           type="text"
                           class="form-control required phone" placeholder="Phone Number"
                           title="This field is required" data-inputmask
                           data-inputmask-mask="(999) 999-9999"/>
                </div>
                <div class="row np">
                    <div class="form-group col-xs-12 text-center">
                        <input v-model="intelliship_user.terms"
                               class="required must-check"
                               title="This field is required"
                               type="checkbox"/>
                        I Agree To The
                <span class="modal-btn fakeLink"
                      data-modal-title="Intelliship Terms Of Use"
                      data-modal-body="#intelliship-terms"
                      data-modal-footer=""
                      data-anal="IS|4-Actually Viewed Terms">
                    Terms Of Use
                </span>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-lg next-step green uppercase"
                            data-anal="Intelliship-Signup|1-Personal Info">
                        create your account
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
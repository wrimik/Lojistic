<div class="step animated">
    <div class="col-sm-8 col-xs-10 col-xs-offset-1">
    <div class="row">
        <div class="row np">
            <div class="col-xs-3 text-vc">
                <img src="/images/test-audit/robot.png"
                     alt="Audisee Parcel Audit"/>
            </div>
            <div class="col-xs-9">
                <h2 class="fw-thin flatGrey">
                    Audit Your <br/>
                    UPS Or FedEx Invoices
                </h2>
            </div>
            </div>
        <div class="row np">
            <form id="audisee-upload-form" action="">
                <input name="hs[fullname]" type="hidden">
                <input name="hs[phone]" type="hidden">
                <input name="hs[company]" type="hidden">
                <div class="form-group">
                    <input type="text" name="hs[email]"
                           class="form-control required"
                           placeholder="Email Address (for a copy of your results)"
                           title="Sorry, gotta have this"/>
                </div>
                <div class="form-group">
                    <input type="file" multiple name="invoice-csv[]"
                           id="invoice-csv" placeholder="Carrier Invoice CSV"/>

                    <div class="btn upload-btn btn-lg brightBlue"
                         data-anal="Audisee|3-Select File">
                        SELECT YOUR CSV OR XML INVOICE FILES
                    </div>
                </div>
            </form>
            <hr class="darkSilver">
            <div class="step-controls text-center">
                <p>
                    <span class="fs-20 fw-thin flatGrey">
                        Not Sure Where To Get Your Invoices? <br>
                        Find Out:
                    </span>
                </p>
                @include('parts/test-audit/instruction-btns')
            </div>
        </div>
        </div>
    </div>
</div>
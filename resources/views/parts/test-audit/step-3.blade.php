<div class="step animated">
    <h2 class="fw-thin text-center flatGrey">Step 3  <span class="fs-12">(of 3)</span>. Let&rsquo;s upload that file.</h2>
    <div class="panel panel-default form-panel">
        <div class="panel-trim brightBlue"></div>
        <div class="panel-body instructions-fedex">
            <h3 class="text-center">
                File Upload
            </h3>
            <p>
                Please make sure to use a real email address so we can send you
                info related to your test audit results... not that you'd ever use a
                fake email or anything...
            </p>
            <form method='post' action='action/audit-demo-upload' role="form" id="upload-csv"
                  enctype='multipart/form-data'>
                <div class="form-group">
                    <input name="hs[fullname]" type="text" class="form-control required" placeholder="Your Full Name"  data-toggle="tooltip" data-placement="bottom" title="This field is required"/>
                </div>
                <div class="form-group">
                    <input name="hs[email]" type="text" class="form-control required" placeholder="Email"  data-toggle="tooltip" data-placement="bottom" title="This field is required"/>
                </div>
                <div class="form-group">
                    <input name="hs[company]" type="text" class="form-control" placeholder="Company"/>
                </div>
                <div class="form-group">
                    <input name="hs[phone]" type="text" class="form-control phone" placeholder="Phone Number" data-inputmask data-inputmask-mask="(999) 999-9999"/>
                </div>
                <div class="form-group">
                    <input type="file" multiple="1" name="invoice-csv[]" id="invoice-csv" placeholder="Carrier Invoice CSV"/>
                    <div class="btn upload-btn btn-lg brightBlue" data-anal="Audisee|3-Select File">
                        SELECT YOUR FILE(s)
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="step-controls text-center">
        <div class="btn flatGrey btn-lg prev-step">GO BACK</div>
    </div>
</div>
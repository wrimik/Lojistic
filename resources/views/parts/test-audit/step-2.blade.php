<div class="step animated">
    <h2 class="fw-thin text-center flatGrey">
        <span v-html="progressTitle"></span>
        <timer msg="@{{ time }} Seconds." zero-msg=""></timer>
    </h2>
    <div class="text-center">
        <div class="progress-circ">
            <i class="fa fa-circle-o-notch flatBlue fs-200 fa-spin"></i>
            <span class="flatBlue">@{{ (uploadProgress * 100).toFixed(1) }}%</span>
        </div>
    </div>
    <div class="upload-messages">
        <div id="unknown-file" class="text-center">
            <h2 class="fw-thin text-center flatGrey">Oops! I don't know that file.</h2>
            <img src="/images/test-audit/think.png" alt="Parcel Audit Help">
            <h3 class="fw-thin flatGrey text-center">Do you want to take another look at those instructions?</h3>
            <div class="step-controls text-center row">
                @include('parts/test-audit/instruction-btns')
            </div>
            <div class="btn btn-lg brightBlue upload-btn">TRY AGAIN. WE <i>BELIEVE</i> IN YOU.</div>
        </div>
    </div>
</div>
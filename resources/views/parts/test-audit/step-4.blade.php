<div class="step animated">
    <h2 class="fw-thin text-center flatGrey upload-progress-title">Upload Progress.</h2>
    <div class="radial-progress">
        <!-- This markup is all for the circle progress indicator -->
        <div class="circle">
            <div class="mask full">
                <div class="fill"></div>
            </div>
            <div class="mask half">
                <div class="fill"></div>
                <div class="fill fix"></div>
            </div>
            <div class="shadow"></div>
        </div>
        <div class="inset transition">
            <div id="ac-1" class="ac transition"></div>
            <div id="ac-2" class="ac transition"></div>
            <div id="ac-3" class="ac transition"></div>
        </div>
    </div>
    <div id="ups-progress-meter">
        <div class="progress-meter accentDarkBlue">
            <div class="progress-indicator accentLightBlue"></div>
        </div>
    </div>
    <div class="upload-messages">
            <div id="unknown-file" class="text-center">
                I didn't understand that file.
                <br/>
                <div class="btn pull-left show-step flatGrey" data-step-target="2">VIEW INSTRUCTIONS</div>
                <div class="btn btn-primary pull-right upload-btn">TRY ANOTHER FILE</div>
            </div>
    </div>
</div>
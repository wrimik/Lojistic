<div id="title-3" class="col-xs-12 step-title">
    <div class="col-xs-12">
        <h2 class="fw-thin">
            <span v-text="title"></span>
        </h2>
        <div class="progress-meter accentDarkBlue">
            <div class="progress-indicator accentLightBlue"></div>
        </div>
        <hr class="slim accentDarkBlue"/>
    </div>
    <div class="col-xs-6 col-sm-12">
        $<span data-animate-to="@{{ total_recovery }}" class="currency fs-32 fw-thin">0</span><br/>
        <span class="fs-12 fw-bold">Total Potential Recovery</span><br/>
        <hr class="slim accentDarkBlue hidden-xs"/>
    </div>
    <div class="col-xs-6 col-sm-12">
        <span data-animate-to="@{{ total_findings }}" class="number fs-32 fw-thin">0</span><br/>
        <span class="fs-12 fw-bold">Potentially Recoverable Charges</span><br/>
    </div>
    <div class="col-xs-12">
        <hr class="slim accentDarkBlue"/>
        <div class="btn btn-info convert">
            THE NEXT STEP
        </div>
    </div>
</div>

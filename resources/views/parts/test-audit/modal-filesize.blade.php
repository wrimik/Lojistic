<div class="modal fade" id="filesize-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Oops!</h4>
            </div>
            <div class="modal-body fs-24 text-center">
                <br/>

                <div id="request-large-audit-before">
                    <h3 class="flatBlue">Wow! Those Are Some Big Files!</h3>

                    <p class="fw-thin fs-20">
                        We limit each individual audit to 130MB. Combined uploads larger than 130MB have to be ran
                        by our technical team.<br/><br/>
                    </p>
                    <div id="request-large-audit"
                         class="btn btn-success btn-inline slack"
                         data-message="Really big audit requested by: ">GET HELP FROM NERDS</div>
                    <div class="btn btn-success btn-inline upload-btn close-modal">
                        TRY AGAIN WITH LESS DATA
                    </div>
                </div>
                <div id="request-large-audit-after">

                    <h3 class="flatBlue">Nerd Alert: Sent!</h3>

                    <p class="fw-thin fs-20">
                        Our tech team will reach out to you soon to get these files over.
                        You entered your email address as:
                    </p>
                    <div class="input-group input-group col-xs-6 col-xs-offset-3">
                        <input id="email-reminder" type="text" class="form-control" placeholder="Username" aria-describedby="confirm-email"/>
                        <span class="input-group-addon btn btn-successs" id="confirm-email">UPDATE</span>
                    </div>
                    <p class="fw-thin fs-20">
                        <br>
                        If this isn't
                        <strike>real</strike>
                        <i>spelled correctly</i>, just update the field above with your
                        <strike>real</strike>
                        <i>properly spelled</i> info.
                        <hr/>
                    </p>
                    <a rel="nofollow" href="/" class="btn btn-primary btn-inline">RETURN HOME</a>
                    <a rel="nofollow" href="/parcel-freight-bill-audit" class="btn btn-primary btn-inline">LEARN MORE ABOUT AUDIT</a>
                    <div class="btn btn-primary btn-inline upload-btn close-modal">
                        TRY AGAIN WITH LESS DATA
                    </div>
                </div>
                <br/>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->
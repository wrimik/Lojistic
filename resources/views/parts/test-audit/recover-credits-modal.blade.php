<div class="modal fade convert-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Getting Your Audit</h4>
            </div>
            <div class="modal-body fs-24 text-center">
                <h3>Let's recover your credits!</h3>
                Take the next step. Talk to one of our experts about enrolling in our Parcel Audit.
                <br/>

                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        @include(
                       'parts.hubspot-form',
                       array(
                               'thankyouPage' => '/thank-you',
                               'intent' => 'Enroll In Parcel Audit',
                               'btnTxt' => 'RECOVER CREDITS',
                               'formID' => '5467cdd9-cb17-497d-88b6-4fa3f41593e5'
                           )
                       )
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->
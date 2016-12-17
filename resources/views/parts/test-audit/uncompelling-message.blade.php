<div class="modal fade uncompelling-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Savings Summary</h4>
            </div>
            <div class="modal-body fs-24 text-center">
                <br/>
                <h4>Wow! You can save: <span>@{{ total_recovery | currency}}</span> on this invoice!?</h4>
                <p>
                    In Pesos, that’s... still not much money...
                </p>
                <p class="flatGrey">
                    Well... don’t we look like jerks?! <br/>
                    I guess your carrier did alright on <i>this</i> invoice. <br/>
                </p>
                <a class="btn btn-success" href="/audisee/instant-parcel-audit">TRY AGAIN</a>
                <br/>
                <br/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
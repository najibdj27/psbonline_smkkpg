@if (session('berhasil'))
    <div id="Notification" class="modal fade">
        <div class="modal-dialog modal-confirm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>
                    </div>
                    <h4 class="modal-title w-100">Berhasil!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">{{session('berhasil')}}</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endif

window.loader = {

    on(loadingText = false) {

        if(!loadingText) {
            loadingText = 'Please wait...';
        }

        let modalLoading = '<div class="modal" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false role="dialog">\
        <div class="modal-dialog">\
            <div class="modal-content">\
                <div class="modal-header">\
                    <h4 class="modal-title">' + loadingText + '</h4>\
                </div>\
                <div class="modal-body">\
                    <div class="progress">\
                      <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"\
                      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%; height: 40px">\
                      </div>\
                    </div>\
                </div>\
            </div>\
        </div>\
    </div>';
        $(document.body).append(modalLoading);
        $("#pleaseWaitDialog").modal("show");
    },

    off() {
        setTimeout(function() {
            $('#pleaseWaitDialog').fadeOut('slow', function() {
                $('#pleaseWaitDialog').modal('hide');
            })
        }, 1000);
    },
    /**
     * This method reloads the page. If you need to redirect to another page, add that as a parameter.
     */
    reload(location = false) {
        setTimeout(function () {
            $('#page-loader').fadeIn();
            setTimeout(() => {
                if (location) {
                    window.location.pathname = '/' + location;
                } else {
                    window.location.reload();
                }
            }, 1000)
        }, 1000)
    }
};
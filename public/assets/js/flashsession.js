$(document).ready(function () {
    var fdSuccess = $('.fd_success').data('flashdata');
    var fdError = $('.fd_error').data('flashdata');
    var fdWarning = $('.fd_warning').data('flashdata');
    var fdInfo = $('.fd_info').data('flashdata');
    var fdSuccessModal = $('.fd_success_with_modal').data('flashdata');

    init({
        fade_in: 800,
        fade_out: 800,
        position: 'top-right'
    });

    if (fdSuccess) {
        toast({
            title: 'Success',
            description: fdSuccess,
            type: 'success',
            timeout: 3000
        });
    }

    if (fdError) {
        toast({
            title: 'Failed',
            description: fdError,
            type: 'error',
            timeout: 3000
        });
    }

    if (fdWarning) {
        toast({
            title: 'Warning',
            description: fdWarning,
            type: 'warning',
            timeout: 3000
        });
    }

    if (fdInfo) {
        toast({
            title: 'Information',
            description: fdInfo,
            timeout: 3000,
            type: 'custom',
            close_color: '#3498db',
            border_color: '#3498db',
            icon: 'url(https://img.icons8.com/flat_round/2x/info.png)'
        });
    }

    if (fdSuccessModal) {
        $('#successModalHiringPartner').modal('show');
    }
});

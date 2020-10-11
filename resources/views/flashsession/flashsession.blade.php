@if ($message = Session::get('success'))
<div class="fd_success" data-flashdata="{{ $message }}"></div>
@endif

@if ($message = Session::get('error'))
<div class="fd_error" data-flashdata="{{ $message }}"></div>
@endif

@if ($message = Session::get('warning'))
<div class="fd_warning" data-flashdata="{{ $message }}"></div>
@endif

@if ($message = Session::get('info'))
<div class="fd_info" data-flashdata="{{ $message }}"></div>
@endif

@if ($message = Session::get('success_with_modal'))
<div class="fd_success_with_modal" data-flashdata="{{ $message }}"></div>
<div class="modal fade" id="successModalHiringPartner" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body pb-2">
                <div class="row d-flex justify-content-center">
                    <img src="{{ asset('assets/mine/image/success.gif') }}" alt="Animation" style="width: 250px">
                </div>
                <div class="col-md-12 text-center mr-0">
                    Thank you for your participation, we will process your request immediately, and we will contact you via email!
                    <button type="button" class="btn btn-waktukitaa mt-4 mb-3" data-dismiss="modal">OK, I Understand</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
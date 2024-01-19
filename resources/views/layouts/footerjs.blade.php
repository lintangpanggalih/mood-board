@stack('modals')
<!-- General JS Scripts  -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Plugin JS Libraries -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset('vendor/datatables/datatables.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"
integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script type="text/javascript" src="{{ asset('vendor/select2/select2.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('vendor/owl-carousel/owl-carousel.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('vendor/chocolat/chocolat.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('vendor/izitoast/izitoast.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('vendor/timepicker/daterangepicker.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('vendor/dropzone/min/dropzone.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('vendor/cleave/cleave.min.js') }}"></script> --}}
{{-- <script type="text/javascript" src="{{ asset('vendor/cleave/cleave-phone.id.js') }}"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

{{--<script type="text/javascript" src="{{ asset('stisla/js/modules/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('stisla/js/modules/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('stisla/js/stisla.js') }}"></script>
<script type="text/javascript" src="{{ asset('stisla/js/modules/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('stisla/js/modules/sticky-kit.js') }}"></script>
<script type="text/javascript" src="{{ asset('stisla/js/custom.js') }}"></script> --}}

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('scripts')

@include('frontend/includes/application/json')

<script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('backend/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })

    $(document).ready(function() {
        $(document).on('submit', '.ladi-form', function() {

            $.ajax({
                url: "{{ route('frontend.contact') }}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(data) {

                    if (data.status) {
                        window.location.reload();
                    } else {
                        toastError(data.message);
                    }
                }
            })
        })
    })

    function toastError(message) {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: message,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    }
</script>

<script src="{{ asset('frontend/assets/js/ladipagev3.min.js') }}"></script>

<script src="{{ asset('frontend/assets/js/main.js') }}"></script>


@stack('scripts')

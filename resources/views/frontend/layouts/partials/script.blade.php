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
                        toastSuccess(data.message);
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
            text: message,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    }

    function toastSuccess(message) {
        Swal.fire({
            icon: 'success',
            text: message,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true
        });
    }

</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    // Initialize Swiper
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 10,
        loop: true,
        grabCursor: true,
    });

    $(document).on('click', '.video-item', function() {
        const videoUrl = $(this).attr('data-video');
        $('.video-container iframe').attr('src', videoUrl);
    })
</script>

<script src="{{ asset('frontend/assets/js/ladipagev3.min.js') }}"></script>

<script src="{{ asset('frontend/assets/js/main.js') }}"></script>


@stack('scripts')

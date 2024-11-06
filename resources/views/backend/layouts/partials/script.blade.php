<script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('backend/assets/js/plugins.js') }}"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        window.previewImage = function(event, imgId) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function() {
                const imgElement = document.getElementById(imgId);
                imgElement.src = reader.result; // Cập nhật nguồn cho ảnh
            }
            if (file) {
                reader.readAsDataURL(file);
            }
        }

        window.removeImages = function(imgId, inputId) {
            const imgElement = document.getElementById(imgId);
            const inputElement = document.getElementById(inputId);

            // Đặt src của ảnh thành trống hoặc ảnh mặc định
            imgElement.src = '';

            // Đặt giá trị của input là null
            inputElement.value = null;

            // Thêm một hidden input để báo cho server biết là ảnh cần xóa
            const removeImageFlag = document.createElement('input');
            removeImageFlag.type = 'hidden';
            removeImageFlag.name = `${inputId}_remove`;
            removeImageFlag.value = true;

            inputElement.parentNode.appendChild(removeImageFlag);
        }
    })
</script>

@stack('scripts')

<!-- App js -->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>

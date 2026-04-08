<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'نجاح',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false,
                timerProgressBar: true,
                position: 'top-end',
                toast: true
            });
        @endif
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'خطأ',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false,
                timerProgressBar: true,
                position: 'top-end',
                toast: true
            });
        @endif
    });
</script>

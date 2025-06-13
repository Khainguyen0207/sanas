@extends(admin_template_basic_theme('layouts.master'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="card">
                <h3 class="card-title">Customer Information</h3>
            </div>
            <div class="form-has-data" id="customer-generate">
                @include(admin_template_basic_theme('pages.customer.base-form'))
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script>
        // Handle file upload preview
        document.getElementById('avatar').addEventListener('change', function (e) {
            const file = e.target.files[0];
            if (file) {
                // Check file type
                if (!file.type.match('image.*')) {
                    alert('Please select an image file');
                    this.value = '';
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('avatar-preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>

@endpush

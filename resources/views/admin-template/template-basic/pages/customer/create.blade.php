@extends(admin_template_basic_theme('layouts.master'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <h3 class="card-title">Customer Information</h3>
            <div class="form-has-data" id="customer-generate" data-url="{{ route('admin.customers.store') }}">>
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

        document.addEventListener('DOMContentLoaded', function () {
                const $dataForm = $('.form-has-data');
                const $form = $('form[data-bs-target="form-customer"]');

                const $id = $dataForm.attr('id') + '-form';
                const $dataUrl = $dataForm.attr('data-url');

                $form.attr('action', $dataUrl);
                $form.attr('id', $id);
                $form.find('input[type="hidden"][name="_method"]').val('POST')
            })
    </script>
@endpush

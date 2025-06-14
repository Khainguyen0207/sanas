@extends(admin_template_basic_theme('layouts.master'))

@section('title', 'Edit Resort')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <h3 class="card-title">Resort Information</h3>

            <div class="form-has-data" id="resort-generate" data-url="{{ route('admin.resorts.update', ['resort' => $resort])}}">
                @include(admin_template_basic_theme('pages.resort.base-form'))
            </div>
        </div>
    </div>
@endsection

@push('footer')
    <script>
        // Handle file upload preview
        document.getElementById('images').addEventListener('change', function (e) {
            const files = e.target.files;
            if (files.length > 0) {
                const previewContainer = document.createElement('div');
                previewContainer.className = 'mt-2';
                previewContainer.innerHTML = '<small class="text-muted">Selected images:</small><div class="d-flex flex-wrap gap-2 mt-1"></div>';

                const previewDiv = previewContainer.querySelector('div');

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    if (!file.type.match('image.*')) {
                        alert('Please select only image files');
                        this.value = '';
                        return;
                    }

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        const img = document.createElement('img');
                        img.src = e.target.result;
                        img.className = 'img-thumbnail';
                        img.width = 100;
                        previewDiv.appendChild(img);
                    }
                    reader.readAsDataURL(file);
                }

                // Remove any existing preview
                const existingPreview = this.parentElement.querySelector('.mt-2');
                if (existingPreview) {
                    existingPreview.remove();
                }

                this.parentElement.appendChild(previewContainer);
            }
        });
        document.addEventListener('DOMContentLoaded', function () {
            const $dataForm = $('.form-has-data');
            const $form = $('form[data-bs-target="form-customer"]');

            const $id = $dataForm.attr('id') + '-form';
            const $dataUrl = $dataForm.attr('data-url');

            $form.attr('action', $dataUrl);
            $form.attr('id', $id);
            $form.find('input[type="hidden"][name="_method"]').val('PUT')
        })
    </script>

    @if($resort)
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const $myVar = @json($resort);
                const $dataForm = $('.form-has-data');
                const $form = $('form[data-bs-target="form-resort"]');

                const $id = $dataForm.attr('id') + '-form';
                const $dataUrl = $dataForm.attr('data-url');

                $form.attr('action', $dataUrl);
                $form.attr('id', $id);
                $form.find('input[type="hidden"][name="_method"]').val('PUT')

                generateForm($myVar, $id)
            })
        </script>
    @endif
@endpush

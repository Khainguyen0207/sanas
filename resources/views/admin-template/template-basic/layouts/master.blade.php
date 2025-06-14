<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? public_path() }}</title>

    @include(admin_template_basic_theme('layouts.header-admin'))
    @stack('css')
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/views/admin-template/template-basic/assets/scss/style.scss', 'resources/views/admin-template/template-basic/assets/js/app.js'])
    @endif

</head>
<body>
<div id="validation" class="d-flex flex-column gap-2" style="position: absolute;
    right: 0;
    top: 78px; z-index: 1031">
</div>
@include('layouts.toasts')
<header>
    @include(admin_template_basic_theme('layouts.partials.header'))
</header>
<main>
    <div class="container-scroller">
        @include(admin_template_basic_theme('partials.sidebar'))

        <div class="container-fluid page-body-wrapper">
            @include(admin_template_basic_theme('partials.navbar'))

            <div class="main-panel">
                @yield('content')
                @include(admin_template_basic_theme('partials.copyright'))
            </div>
        </div>
    </div>
</main>cú
<footer>
    @include(admin_template_basic_theme('layouts.footer-admin'))
    @stack('footer')
</footer>
</body>
@include('layouts.footer')
</html>
<!-- Modal -->
<div class="modal fade" id="modal-confirm-delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn có thật sự muốn xóa
            </div>
            <form action="#" id="modal-confirm-action" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
        </div>
    </div>
</div>

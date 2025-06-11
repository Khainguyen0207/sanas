<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ 'Homepage'  }}</title>

    <link rel="shortcut icon" href="{{asset('assets/images/theme/images/logo.png')}}" type="image/x-icon">

    @include('layouts.partials.styles')

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/views/theme/assets/scss/style.scss', 'resources/views/theme/assets/js/app.js'])
    @endif

    @stack('styles')
</head>
<body>
<div id="validation" class="d-flex flex-column gap-2" style="position: absolute;
    right: 0;
    top: 78px;">
</div>
<header>
    @include('layouts.partials.header')
</header>
<main class="overflow-x-hidden">
    <div class="container-fluid">
        @yield('content')
    </div>
</main>
<footer>
    @include('layouts.partials.footer')
</footer>
@include('layouts.footer')
</html>

<script>

</script>

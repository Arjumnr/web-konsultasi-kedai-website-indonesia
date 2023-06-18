<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin Andex-Cargo</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/assets/images/logo.jpeg') }}">

    @stack('cssScript')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>

                @include('admin._layouts.navbar')

                @include('admin._layouts.sidebar')

            <div class="main-content">
                @yield('content')
            </div>

            @include('admin._layouts.footer')
        </div>
    </div>


    @stack('jsScript')

    @stack('jsScriptAjax')

</body>

</html>

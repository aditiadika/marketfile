<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
</head>
<body>

    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    @include('layouts.partials.scripts')

</body>
</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
</head>
<body>

    <div id="app">
        @include('layouts.partials.navigation')
    </div>
    {{--@yield('content')--}}

    <!-- Scripts -->
    @include('layouts.partials.scripts')

</body>
</html>

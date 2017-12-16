<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
    @include('layouts.partials.head')
    </head>
    <body>

    <div id="app">
        @include('layouts.partials.navigation')
        {{--@yield('content')--}}
    </div>

        <!-- Scripts -->
    @include('layouts.partials.scripts')

    </body>
</html>

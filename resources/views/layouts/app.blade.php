<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('includes.head')

<body>
<div class="container" id="app">
    <header>
    @include('includes.nav')
    </header>
    <main class="py-4">
        @yield('content')
    </main>
    @include('includes.jsfooter')
    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>
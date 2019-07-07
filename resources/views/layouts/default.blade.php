<!doctype html>
<html lang="en">

@include('includes.head')

<body>

<div class="container">
    <header class="container">
        @include('includes.menu')
    </header>

    <main role="main">
    </main>

    @yield('content')

    @include('includes.jsfooter')
    <footer>
        @include('includes.footer')
    </footer>
</div>
</body>
</html>

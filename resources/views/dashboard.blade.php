{{-- @extends('layouts.master') --}}

<body class="g-sidenav-show  bg-gray-200">
    @include('partials.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        @include('partials.nav')

        <!-- End Navbar -->
        <div class="container-fluid py-4">

           @yield('content')

           
            @include('partials.footer')

        </div>
    </main>

    <!--   Core JS Files   -->
    @include('partials.javascript')
</body>

</html>

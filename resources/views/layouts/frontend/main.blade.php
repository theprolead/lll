@include("layouts.frontend.head")
<body>
<div id="app">

@include("layouts.frontend.nav")
    <main class="py-4">
        @yield('content')
    </main>
    @include('layouts.frontend.footer')



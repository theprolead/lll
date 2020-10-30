@include("layouts.user.head")
<body>
<div id="app">

@include("layouts.user.nav")
    <main class="py-4">
        @yield('content')
    </main>
    @include('layouts.user.footer')



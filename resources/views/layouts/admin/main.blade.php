@include("layouts.admin.head")
<body>
<div id="app">

@include("layouts.admin.nav")
    <main class="py-4">
        @yield('content')
    </main>
    @include('layouts.admin.footer')



<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.partials.meta')
    <title>Assignment Project</title>
    @include('frontend.partials.styles')
    @stack('styles')
</head>

<body>
    @include('frontend.partials.nav')
    @include('frontend.partials.flash-message')
    <div class="container">
        @yield('content')
    </div>

    
    @include('frontend.partials.scripts')
    @stack('scripts')
</body>
</html>

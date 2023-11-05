<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    @include('layouts.header') <!-- Include the header -->
    <div class="content">
        @yield('content') <!-- Content of individual pages -->
    </div>
    @include('layouts.footer') <!-- Include the footer -->
</body>
</html>
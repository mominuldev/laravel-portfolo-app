<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Title -->
    <title>Admin - @section('title')</title>

    <!-- Script -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

 
    @include('admin.layouts.navigation')

    <main role="mail" class="site-main min-h-fit">
        @yield('content')
    </main>
    
    @include('admin.layouts.footer');

</body>
</html>
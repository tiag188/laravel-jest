{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha lista de Items - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="{{ mix('resources/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('resources/sass/app.scss') }}" rel="stylesheet">

</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ mix('resources/js/app.js') }}"></script>
</body>
</html>

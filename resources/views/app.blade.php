<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel & VUEjs CRUD</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    </head>
    <body>
        <div id="main" class="container">
            <div class="row">
                
                @yield('content')

            </div>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
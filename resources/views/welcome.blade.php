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
                <div class="col-sm-4">
                    <h1>Lista VUEjs - AJAX</h1>
                    <ul class="list-group">
                        <li v-for="item in lists" class="list-group-item">                      
                            @{{ item.name }}
                        </li>
                    </ul>
                </div>
                <div class="col-sm-8">
                    <h1>JSON</h1>
                    <div class="card bg-light">
                        <div class="card-body">
                            <pre>
                                @{{ $data }}
                            </pre>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

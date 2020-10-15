<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body class="antialiased">
        <div id="app" class="row">
            <div class="col-md-6 col-sm-12 my-auto col-lg-6 col-xl-6 bg-danger p-4">
               <span class="display-2">Contact Us</span>

            </div>
            <div class="col-sm-12 col-md-6 p-2 col-lg-6 col-xl-6 py-2">
                @yield('content')
            </div>
        </div>
        <script src="./js/app.js"></script>
    </body>
</html>

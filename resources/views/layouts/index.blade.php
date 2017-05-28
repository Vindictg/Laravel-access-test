<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accesos</title>
        {!!Html::style('css/app.css')!!}

    </head>
    <body>
        @yield('content')

        {!!Html::script('js/app.js')!!}
    </body>
</html>

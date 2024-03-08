<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>my app</title>
      
    </head>
    <body>
        <div>
            <h1>Product <i>{{ $name }}</i> added succefully </h1>
            <p>{{ $description }}</p>
            <p>{{ $price }}</p>
        </div>
    </body>
</html>

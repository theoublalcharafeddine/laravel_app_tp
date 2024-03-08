<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>remove Product</title>

</head>
<body> 
    <p >Language: {{ $languageMessage }}</p>
            <h1>Navbar</h1>

        <a href="/">Add Product</a>
        <a href="/delete">remove Product</a>
        <a href="/products">See products</a>
<hr/>
@if (session('error'))
    <div >
        {{ session('error') }}
    </div>
@endif

    <p>id of the product you want to delete</p>

    <form action="{{route('delete-product')}}" method="post">
        @csrf
        <input type="number" name="id-deleted" placeholder="id"/><br/>
        <input type="submit" value="submit"/>
    </form>
</body>
</html>
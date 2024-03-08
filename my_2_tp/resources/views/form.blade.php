<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Product</title>
   
</head>
<body>
    <p >Language: {{ $languageMessage }}</p>
    <h1>Navbar</h1>
    <a href="/">Add  Product</a>
    <a href="/delete">remove Product</a>
    <a href="/products">See products</a>
<hr/>
    <h1>Adding Product</h1>
    <form action="{{ route('submit.form') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Product's Name"/><br/>
        <input type="text" name="description" placeholder="Product's Description"/><br/>
        <input type="number" name="price" placeholder="Product's Price"/><br/>
        <input type="submit" value="Submit"/><br/>
    </form>
    

</body>
</html>
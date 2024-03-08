<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Produits</title>

</head>
<body>
    
    <p >Language: {{ $languageMessage }}</p>
    <h1>Navbar</h1>
    <a href="/">Add a Product</a>
    <a href="/delete">remove Product</a>
    <a href="/products">See products</a>
    <hr />

    <h1>Liste des produits</h1>
    @if (session('success'))
        <div style="background: lightgreen">
            {{ session('success') }}
        </div>
    @endif


    <table >
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Commentaires</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    @forelse ($product->comments as $comment)
                    <p>{{ $comment->content }}</p>
                @empty
                    <p>No comments </p>
                @endforelse
                </td>
            </tr>
        @endforeach
    </table>

</body>
</html>

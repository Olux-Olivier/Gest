<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Products</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>product name</th>
                    <th>price</th>
                    <th>quantity stock</th>
                    <th>category_id</th>
                    <th>supplier_id</th>
                </tr>
            </thead>
            <tbody>
            @foreach($product as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->product_name }}</td>
                    <td>{{ $prod->price }}</td>
                    <td>{{ $prod->quantity_in_stock }}</td>
                    <td>{{ $prod->category_id }}</td>
                    <td>{{ $prod->supplier_id }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>

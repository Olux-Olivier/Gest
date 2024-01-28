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
                    <th>supplier name</th>
                    <th>contact</th>
                </tr>
            </thead>
            <tbody>
            @foreach($supplier as $supp)
                <tr>
                    <td>{{ $supp->id }}</td>
                    <td>{{ $supp->name }}</td>
                    <td>{{ $supp->price }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <a href="{{ route('registerSupplier') }}">Retour</a>
    </div>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List categories</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>categorie name</th>
                </tr>
            </thead>
            <tbody>
            @foreach($category as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->name }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>

        <a href="{{ route('createCategorie') }}">Retour</a>
    </div>

</body>
</html>

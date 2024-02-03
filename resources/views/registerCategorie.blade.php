<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register Categorie</title>
</head>
<body>
    <div>
        <h1>Register categorie</h1>
        <form method="post" action="" >
        @csrf
            <label>
                Categorie name
                <input type="text" name="name" value="{{ old("name") }}">
                @error("name")
                    {{ $message }}
                @enderror
            </label><br>

            <button>Register</button>

        </form>
    </div>
</body>
</html>

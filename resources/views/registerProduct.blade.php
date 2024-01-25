<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register Product</title>
</head>
<body>
    <div>
        <h1>Register Product</h1>
        <form method="post" action="" >
        @csrf
            <label>
                Product name
                <input type="text" name="product_name">
                @error("product_name")
                    {{ $message }}
                @enderror
            </label><br>


            <label>
                Price
                <input type="number" name="price">
                @error("price")
                    {{ $message }}
                @enderror
            </label><br>

            <label>
                Quantity stock
                <input type="number" name="quantity_in_stock">
                @error("quantity_in_stock")
                    {{ $message }}
                @enderror
            </label><br>

            <button>Register</button>

        </form>
    </div>
</body>
</html>

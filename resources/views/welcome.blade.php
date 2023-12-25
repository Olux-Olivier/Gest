<h1>List Product</h1>
<table border="1">
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Product category</th>
            <th>Product Category</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->price}}</td>
            <td>{{ $product->quantity_in_stock }}</td>
            <td>{{ $product->supplier_id }}</td>
            <td>{{ $product->created_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

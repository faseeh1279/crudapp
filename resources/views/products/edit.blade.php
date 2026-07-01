<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <h1 align="center">Update Product</h1>
    <form class="container" method="POST" action="{{ route('product.update', ['product'=>$product]) }}">
        @csrf
        @method('PUT')
        <div class="container m-5">
            <label>Product Name</label>
            <input type="text" class="form-control" name="name" value={{ $product->name }} required> 
        </div>

        <div class="container m-5">
            <label>Product Description</label>
            <input type="text" class="form-control" name="description" value={{ $product->description }} required> 
        </div>
        
        <div class="container m-5">
            <label>Product Price</label>
            <input type="text" class="form-control" name="price" value={{ $product->price }} required> 
        </div>

        <div class="container m-5">
            <label>Product Quantity</label>
            <input type="text" class="form-control" name="qty" value={{ $product->qty }} required>
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('products.index') }}" style="text-decoration:none; color: white;">
            <button type="button" class="btn btn-success">
                    Go Back
                </button>
            </a>
        </div>
    </form>
</body>
</html>
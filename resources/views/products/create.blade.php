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
    <h1>This is Create Page of Products</h1>
    <form class="container" method="post" action="{{ route('products.store') }}">
        @csrf
        @method('POST')
        <div class="container m-5">
            <label>Product Name</label>
            <input type="text" class="form-control" name="name"> 
        </div>

        <div class="container m-5">
            <label>Product Description</label>
            <input type="text" class="form-control" name="description"> 
        </div>
        
        <div class="container m-5">
            <label>Product Price</label>
            <input type="number" class="form-control" name="price"> 
        </div>

        <div class="container m-5">
            <label>Product Quantity</label>
            <input type="number" class="form-control" name="qty">
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body>
</html>
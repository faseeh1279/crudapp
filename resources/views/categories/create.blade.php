<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <h1 align="center">Add Category</h1>
    <div class="container">
    <form class="table" method="post" action="{{ route('categories.store') }}">
        @csrf
        @method('POST')
        <div class="container m-5">
            <label>Category Name</label>
            <input type="text" class="form-control" name="name" required> 
        </div>
        <div class="container m-5">
            <label>Category Type</label>
            <input type="text" class="form-control" name="type" required> 
        </div>
        <div class="container m-5">
            <label>Category Description</label>
            <input type="text" class="form-control" name="description" required> 
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('categories.index') }}" style="text-decoration:none; color: white;">
            <button type="button" class="btn btn-success">
                    Go Back
                </button>
            </a>
        </div>
    </form>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body>
    <h1 align="center">Categories List</h1> 
    <div class="container">
        <a class="btn btn-primary text-white" href="{{ route('categories.create') }}">
            Add Category
        </a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->type }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a class="btn btn-warning text-white" href="{{ route('categories.edit', $category->id) }}">Update</a>
                            <form class="d-inline" method="post" action="{{ route('categories.destroy', $category->id) }}" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger text-white" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- Pagination Container START --}}
        <div class="container text-center">
    <nav>
        <ul class="pagination">

            {{-- Previous --}}
            @if($page > 1)
                <li class="page-item">
                    <a class="page-link" href="?page={{ $page - 1 }}">
                        Previous
                    </a>
                </li>
            @endif

            {{-- Page info --}}
            <li class="page-item disabled">
                <span class="page-link">
                    Page {{ $page }} of {{ $totalPages }}
                </span>
            </li>

            {{-- Next --}}
            @if($page < $totalPages)
                <li class="page-item">
                    <a class="page-link" href="?page={{ $page + 1 }}">
                        Next
                    </a>
                </li>
            @endif

        </ul>
    </nav>
</div>
        {{-- Pagination Container END --}}
</body>
</html>
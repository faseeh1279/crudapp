<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    // public function index($perPage = 10, $pageNumber = 1)
    // { 
    //     // $categories = Category::paginate($perPage, ['Id', 'Name', 'Type', 'Description'], 'page', $pageNumber, null); // Fetch categories with pagination, 10 per page. 
    //     // $categories = Category::all(); 
    //     $categories = DB::table('categories')->simplePaginate(perPage:$perPage, page:$pageNumber); // Fetch categories with pagination, 10 per page. 

    //     // compact method creates an associate array with key value pairs where the key is the variable name and the value is the variable value.
    //     return view('categories.index', compact('categories'));
    // }

    public function index()
    {
        $page = request()->get('page', 1);
        $perPage = request()->get('per_page', 10);

        $offset = ($page - 1) * $perPage;

        $categories = DB::table('categories')
            ->offset($offset)
            ->limit($perPage)
            ->get();

        $total = DB::table('categories')->count();
        $totalPages = ceil($total / $perPage);

        return view('categories.index', compact(
            'categories',
            'page',
            'totalPages'
        ));
    }

    public function create()
    { 
        return view('categories.create');
    }

    public function store(Request $request)
    { 
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $categoryAdded = Category::create($data);

        return redirect(route('categories.index'))->with('success', 'Category created successfully.');
    }
    public function edit($id){ 
        return view('categories.edit', ['category' => Category::findOrFail($id)]);
    }
    public function update(Request $request, $id){ 
        $category = Category::findOrFail($id); 

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $category->update($data); 
        return redirect(route('categories.index'))->with('success', 'Category updated successfully.');
    }

    public function destroy($id){ 
        $category = Category::findOrFail($id); 
        $category->delete(); 

        return redirect(route('categories.index'))->with('success', 'Category deleted successfully.');
    }

}

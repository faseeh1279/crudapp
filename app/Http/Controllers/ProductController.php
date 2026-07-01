<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Models\Product;
    use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10, ['*'], 'page', 1, 12); 
        return view('products.index', ['products' => $products]);
    }

    public function create() 
    { 
        return view('products.create'); 
    }

    public function store(Request $request){ 
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $newProduct = Product::create($data);   

        return redirect(route('products.index')); 
    }

    public function edit(Product $product){  
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request){ 
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'qty' => 'required|integer',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);

        $product->update($data);

        return redirect(route('products.index'))->with('success', 'Product updated successfully.');
    }

    public function destroy(int $id){ 
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect(route('products.index'))->with('success', 'Product deleted successfully.');
    }

    public function pagination($pageNumber, $perPage = 10)
    { 
        $products = DB::table('products')->paginate(perPage:25); 
        return view('products.index', ['products' => $products]);
    }
}

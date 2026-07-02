<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->orderBy('sort_order')->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id'       => 'required|exists:categories,id',
            'name'              => 'required|string|max:200',
            'short_description' => 'nullable|string|max:300',
            'description'       => 'nullable|string',
            'shade_percentage'  => 'nullable|string|max:50',
            'width'             => 'nullable|string|max:50',
            'gsm'               => 'nullable|string|max:50',
            'images.*'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('products', 'public');
            }
        }

        $specs = [];
        if ($request->spec_keys) {
            foreach ($request->spec_keys as $i => $key) {
                if (!empty($key) && isset($request->spec_values[$i])) {
                    $specs[$key] = $request->spec_values[$i];
                }
            }
        }

        Product::create([
            'category_id'       => $request->category_id,
            'name'              => $request->name,
            'slug'              => Str::slug($request->name),
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'specifications'    => $specs,
            'images'            => $imagePaths,
            'shade_percentage'  => $request->shade_percentage,
            'width'             => $request->width,
            'gsm'               => $request->gsm,
            'is_featured'       => $request->has('is_featured'),
            'is_active'         => $request->has('is_active'),
            'sort_order'        => $request->sort_order ?? 0,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product    = Product::findOrFail($id);
        $categories = Category::where('is_active', true)->orderBy('name')->get();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'category_id'       => 'required|exists:categories,id',
            'name'              => 'required|string|max:200',
            'short_description' => 'nullable|string|max:300',
            'description'       => 'nullable|string',
            'shade_percentage'  => 'nullable|string|max:50',
            'width'             => 'nullable|string|max:50',
            'gsm'               => 'nullable|string|max:50',
            'images.*'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:3072',
        ]);

        $imagePaths = $product->images ?? [];
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('products', 'public');
            }
        }

        $specs = [];
        if ($request->spec_keys) {
            foreach ($request->spec_keys as $i => $key) {
                if (!empty($key) && isset($request->spec_values[$i])) {
                    $specs[$key] = $request->spec_values[$i];
                }
            }
        }

        $product->update([
            'category_id'       => $request->category_id,
            'name'              => $request->name,
            'slug'              => Str::slug($request->name),
            'short_description' => $request->short_description,
            'description'       => $request->description,
            'specifications'    => $specs,
            'images'            => $imagePaths,
            'shade_percentage'  => $request->shade_percentage,
            'width'             => $request->width,
            'gsm'               => $request->gsm,
            'is_featured'       => $request->has('is_featured'),
            'is_active'         => $request->has('is_active'),
            'sort_order'        => $request->sort_order ?? 0,
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}

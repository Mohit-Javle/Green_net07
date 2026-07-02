<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $categories = Category::where('is_active', true)->orderBy('sort_order')->get();
        
        $query = Product::where('is_active', true)->with('category');
        
        if ($search) {
            $searchTerm = '%' . strtolower($search) . '%';
            $query->where(function ($q) use ($searchTerm) {
                $q->whereRaw('LOWER(name) LIKE ?', [$searchTerm])
                  ->orWhereRaw('LOWER(description) LIKE ?', [$searchTerm])
                  ->orWhereRaw('LOWER(short_description) LIKE ?', [$searchTerm]);
            });
        }
        
        $products = $query->orderBy('sort_order')->paginate(12)->withQueryString();

        return view('frontend.products.index', compact('categories', 'products', 'search'));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->where('is_active', true)->with('category')->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('is_active', true)
            ->take(4)->get();

        return view('frontend.products.show', compact('product', 'relatedProducts'));
    }

    public function category(Request $request, $slug)
    {
        $search = $request->input('search');
        $category = Category::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $categories = Category::where('is_active', true)->orderBy('sort_order')->get();
        
        $query = Product::where('category_id', $category->id)->where('is_active', true);
        
        if ($search) {
            $searchTerm = '%' . strtolower($search) . '%';
            $query->where(function ($q) use ($searchTerm) {
                $q->whereRaw('LOWER(name) LIKE ?', [$searchTerm])
                  ->orWhereRaw('LOWER(description) LIKE ?', [$searchTerm])
                  ->orWhereRaw('LOWER(short_description) LIKE ?', [$searchTerm]);
            });
        }
        
        $products = $query->paginate(12)->withQueryString();

        return view('frontend.products.index', compact('categories', 'products', 'category', 'search'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Inquiry;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories  = Category::count();
        $totalProducts    = Product::count();
        $totalInquiries   = Inquiry::count();
        $unreadInquiries  = Inquiry::where('is_read', false)->count();
        $recentInquiries  = Inquiry::latest()->take(5)->get();
        $featuredProducts = Product::where('is_featured', true)->count();

        return view('admin.dashboard', compact(
            'totalCategories', 'totalProducts', 'totalInquiries',
            'unreadInquiries', 'recentInquiries', 'featuredProducts'
        ));
    }
}

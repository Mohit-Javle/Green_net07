@extends('layouts.admin')
@section('title', 'Products')

@section('content')
<div class="page-head">
    <h2>Manage Products</h2>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-boxes-packing"></i> Add Product
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h3>All Products ({{ $products->total() }})</h3>
    </div>
    <div style="overflow-x: auto;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Specifications</th>
                    <th>Featured</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td style="width: 64px;">
                        @if($product->images && count($product->images) > 0)
                        <img src="{{ asset('storage/' . $product->images[0]) }}"
                             alt="{{ $product->name }}"
                             style="width: 52px; height: 40px; object-fit: cover; border-radius: 4px;">
                        @else
                        <div style="width: 52px; height: 40px; background: #f0f4f0; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                             <i class="fa-solid fa-boxes-stacked" style="color: #9CA3AF; font-size: 16px;"></i>
                        </div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $product->name }}</strong>
                        <div style="font-size: 11px; color: var(--muted); margin-top: 2px;">
                            slug: <span style="font-family: monospace;">{{ $product->slug }}</span>
                        </div>
                    </td>
                    <td>
                        <span style="font-size: 13px; font-weight: 500;">{{ $product->category->name ?? 'Uncategorized' }}</span>
                    </td>
                    <td style="font-size: 12.5px;">
                        @if($product->shade_percentage)
                        <div>Shade: <strong>{{ $product->shade_percentage }}</strong></div>
                        @endif
                        @if($product->gsm)
                        <div>GSM: <strong>{{ $product->gsm }}</strong></div>
                        @endif
                        @if($product->width)
                        <div>Width: <strong>{{ $product->width }}</strong></div>
                        @endif
                        @if(!$product->shade_percentage && !$product->gsm && !$product->width)
                        <span style="color: var(--muted); font-style: italic;">No basic specs</span>
                        @endif
                    </td>
                    <td>
                        @if($product->is_featured)
                        <span class="badge badge-success"><i class="fa-solid fa-star"></i> Featured</span>
                        @else
                        <span class="badge badge-warning">Standard</span>
                        @endif
                    </td>
                    <td>
                        @if($product->is_active)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                    </td>
                    <td>{{ $product->sort_order }}</td>
                    <td>
                        <div style="display: flex; gap: 6px;">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                               class="btn btn-sm btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                  onsubmit="return confirm('Delete product: {{ addslashes($product->name) }}?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" style="text-align: center; padding: 40px; color: var(--muted);">
                        No products added yet. <a href="{{ route('admin.products.create') }}" style="color: var(--primary);">Add the first one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($products->hasPages())
    <div style="padding: 16px 22px; border-top: 1px solid var(--border);">
        {{ $products->links() }}
    </div>
    @endif
</div>
@endsection

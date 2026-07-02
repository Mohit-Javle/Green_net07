@extends('layouts.admin')
@section('title', 'Categories')

@section('content')
<div class="page-head">
    <h2>Product Categories</h2>
    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
        <i class="fa-solid fa-folder-plus"></i> Add Category
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h3>All Categories ({{ $categories->total() }})</h3>
    </div>
    <div style="overflow-x: auto;">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Category Name</th>
                    <th>Slug</th>
                    <th>Products</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr>
                    <td style="width: 64px;">
                        @if($category->image)
                        <img src="{{ asset('storage/' . $category->image) }}"
                             alt="{{ $category->name }}"
                             style="width: 52px; height: 40px; object-fit: cover; border-radius: 4px;">
                        @else
                        <div style="width: 52px; height: 40px; background: #f0f4f0; border-radius: 4px; display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-image" style="color: #9CA3AF; font-size: 16px;"></i>
                        </div>
                        @endif
                    </td>
                    <td><strong>{{ $category->name }}</strong></td>
                    <td style="font-size: 12px; color: var(--muted); font-family: monospace;">{{ $category->slug }}</td>
                    <td>
                        <span class="badge badge-success">{{ $category->products_count }} products</span>
                    </td>
                    <td>
                        @if($category->is_active)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                    </td>
                    <td>{{ $category->sort_order }}</td>
                    <td>
                        <div style="display: flex; gap: 6px;">
                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                               class="btn btn-sm btn-warning">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                  onsubmit="return confirm('Delete category: {{ addslashes($category->name) }}? All associated products will also be deleted.')">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center; padding: 40px; color: var(--muted);">
                        No categories added yet. <a href="{{ route('admin.categories.create') }}" style="color: var(--primary);">Add the first one.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($categories->hasPages())
    <div style="padding: 16px 22px; border-top: 1px solid var(--border);">
        {{ $categories->links() }}
    </div>
    @endif
</div>
@endsection

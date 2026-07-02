@extends('layouts.admin')
@section('title', 'Edit Category')

@section('content')
<div class="page-head">
    <h2>Edit Category: {{ $category->name }}</h2>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
        <i class="fa-solid fa-arrow-left"></i> Back to Categories
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h3>Edit Category Details</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="form-grid-2">
                <div class="form-group">
                    <label for="name">Category Name *</label>
                    <input type="text" id="name" name="name"
                           value="{{ old('name', $category->name) }}" required>
                    @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="sort_order">Display Order</label>
                    <input type="number" id="sort_order" name="sort_order"
                           value="{{ old('sort_order', $category->sort_order) }}" min="0">
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4">{{ old('description', $category->description) }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Category Image</label>
                @if($category->image)
                <div style="margin-bottom: 10px;">
                    <img src="{{ asset('storage/' . $category->image) }}"
                         alt="Current image" style="height: 80px; border-radius: 4px; border: 1px solid var(--border);">
                    <p class="form-help" style="margin-top: 4px;">Current image. Upload a new one to replace it.</p>
                </div>
                @endif
                <input type="file" id="image" name="image" accept="image/*">
                @error('image')<span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label class="form-check">
                    <input type="checkbox" name="is_active" value="1"
                           {{ $category->is_active ? 'checked' : '' }}>
                    <span>Active — Show this category on the website</span>
                </label>
            </div>
            <div style="display: flex; gap: 12px; margin-top: 8px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i> Update Category
                </button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

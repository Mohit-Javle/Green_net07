@extends('layouts.admin')
@section('title', 'Add Category')

@section('content')
<div class="page-head">
    <h2>Add New Category</h2>
    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">
        <i class="fa-solid fa-arrow-left"></i> Back to Categories
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h3>Category Details</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-grid-2">
                <div class="form-group">
                    <label for="name">Category Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                           placeholder="e.g. Agriculture Shade Net" required>
                    @error('name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="sort_order">Display Order</label>
                    <input type="number" id="sort_order" name="sort_order"
                           value="{{ old('sort_order', 0) }}" min="0">
                    <p class="form-help">Lower number = appears first in listing.</p>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4"
                          placeholder="Describe this category — what products it contains, applications, etc.">{{ old('description') }}</textarea>
                @error('description')<span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="image">Category Image</label>
                <input type="file" id="image" name="image" accept="image/*">
                <p class="form-help">Recommended: 600×400 px, JPG or PNG, max 2MB.</p>
                @error('image')<span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label class="form-check">
                    <input type="checkbox" name="is_active" value="1"
                           {{ old('is_active', true) ? 'checked' : '' }}>
                    <span>Active — Show this category on the website</span>
                </label>
            </div>
            <div style="display: flex; gap: 12px; margin-top: 8px;">
                <button type="submit" class="btn btn-primary">
                    <i class="fa-solid fa-floppy-disk"></i> Save Category
                </button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection

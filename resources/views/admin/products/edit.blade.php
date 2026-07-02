@extends('layouts.admin')
@section('title', 'Edit Product')

@section('content')
<div class="page-head">
    <h2>Edit Product: {{ $product->name }}</h2>
    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">
        <i class="fa-solid fa-arrow-left"></i> Back to List
    </a>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul style="margin-left: 20px;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-grid-2">
        <div class="card" style="margin-bottom: 20px;">
            <div class="card-header">
                <h3>Product Details</h3>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Product Name *</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required placeholder="e.g. 50% Green Shade Net">
                </div>

                <div class="form-group">
                    <label for="category_id">Category *</label>
                    <select id="category_id" name="category_id" required>
                        <option value="">Select a Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <input type="text" id="short_description" name="short_description" value="{{ old('short_description', $product->short_description) }}" placeholder="Brief summary (max 300 chars)">
                </div>

                <div class="form-group">
                    <label for="description">Full Description</label>
                    <textarea id="description" name="description" placeholder="Detailed product descriptions, applications, and features">{{ old('description', $product->description) }}</textarea>
                </div>
            </div>
        </div>

        <div>
            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">
                    <h3>Media & Status</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Current Images</label>
                        @if($product->images && count($product->images) > 0)
                        <div style="display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 12px;">
                            @foreach($product->images as $img)
                            <div style="position: relative; border: 1px solid var(--border); border-radius: 4px; padding: 2px;">
                                <img src="{{ asset('storage/' . $img) }}" style="width: 70px; height: 50px; object-fit: cover; border-radius: 2px;">
                            </div>
                            @endforeach
                        </div>
                        @else
                        <div style="font-size: 13px; color: var(--muted); margin-bottom: 12px;">No images uploaded yet.</div>
                        @endif

                        <label for="images">Upload New Images</label>
                        <input type="file" id="images" name="images[]" multiple accept="image/*">
                        <div class="form-help">Uploading new images will replace existing ones. Max size 3MB per image.</div>
                    </div>

                    <div class="form-grid-2" style="gap: 12px; margin-top: 10px;">
                        <div class="form-group">
                            <label for="shade_percentage">Shade %</label>
                            <input type="text" id="shade_percentage" name="shade_percentage" value="{{ old('shade_percentage', $product->shade_percentage) }}" placeholder="e.g. 50%">
                        </div>
                        <div class="form-group">
                            <label for="gsm">GSM</label>
                            <input type="text" id="gsm" name="gsm" value="{{ old('gsm', $product->gsm) }}" placeholder="e.g. 120 GSM">
                        </div>
                    </div>

                    <div class="form-grid-2" style="gap: 12px;">
                        <div class="form-group">
                            <label for="width">Widths Available</label>
                            <input type="text" id="width" name="width" value="{{ old('width', $product->width) }}" placeholder="e.g. 2m, 3m, 4m">
                        </div>
                        <div class="form-group">
                            <label for="sort_order">Sort Order</label>
                            <input type="number" id="sort_order" name="sort_order" value="{{ old('sort_order', $product->sort_order) }}">
                        </div>
                    </div>

                    <div style="display: flex; gap: 24px; margin-top: 15px;">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-check">
                                <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}>
                                <label for="is_featured">Featured Product</label>
                            </label>
                        </div>
                        <div class="form-group" style="margin-bottom: 0;">
                            <label class="form-check">
                                <input type="checkbox" name="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
                                <label for="is_active">Active (Visible)</label>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="margin-bottom: 20px;">
                <div class="card-header">
                    <h3>Specifications & Attributes</h3>
                </div>
                <div class="card-body">
                    <div id="specs-container">
                        @if($product->specifications && count($product->specifications) > 0)
                            @foreach($product->specifications as $key => $val)
                            <div class="spec-row">
                                <input type="text" name="spec_keys[]" value="{{ $key }}" placeholder="Specification Key">
                                <input type="text" name="spec_values[]" value="{{ $val }}" placeholder="Specification Value">
                                <button type="button" class="remove-spec-btn" onclick="removeSpecRow(this)"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                            @endforeach
                        @else
                            <div class="spec-row">
                                <input type="text" name="spec_keys[]" placeholder="Specification Key">
                                <input type="text" name="spec_values[]" placeholder="Specification Value">
                                <button type="button" class="remove-spec-btn" onclick="removeSpecRow(this)"><i class="fa-solid fa-xmark"></i></button>
                            </div>
                        @endif
                    </div>
                    <button type="button" id="add-spec-btn" style="margin-top: 10px;">
                        <i class="fa-solid fa-plus"></i> Add Spec Row
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div style="margin-top: 10px; text-align: right;">
        <button type="submit" class="btn btn-primary" style="padding: 12px 30px;">
            <i class="fa-solid fa-floppy-disk"></i> Update Product
        </button>
    </div>
</form>

@section('extra_js')
<script>
    document.getElementById('add-spec-btn').addEventListener('click', function() {
        const container = document.getElementById('specs-container');
        const row = document.createElement('div');
        row.className = 'spec-row';
        row.innerHTML = `
            <input type="text" name="spec_keys[]" placeholder="Specification Key">
            <input type="text" name="spec_values[]" placeholder="Specification Value">
            <button type="button" class="remove-spec-btn" onclick="removeSpecRow(this)"><i class="fa-solid fa-xmark"></i></button>
        `;
        container.appendChild(row);
    });

    function removeSpecRow(btn) {
        const row = btn.closest('.spec-row');
        row.remove();
    }
</script>
@endsection
@endsection

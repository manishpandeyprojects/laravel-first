@extends('layout.app')

@section('hero-banner')
<h3 class="my-5">Edit Product</h3>
<form action="{{ route('products.update', $product) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group mb-3">
        <label for="name">Product Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea name="description" class="form-control">{{ old('description', $product->description) }}</textarea>
        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01">
        @error('price') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" class="form-control" value="{{ old('quantity', $product->quantity) }}">
        @error('quantity') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="image">Product Image (Leave blank to keep current image)</label>
        <input type="file" name="image" class="form-control">
        @error('image') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="active" {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('status') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
@endsection
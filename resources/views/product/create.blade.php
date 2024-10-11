@extends('layout.app')

@section('hero-banner')
<h3 class="my-5">Add Product</h3>
<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-3">
        <label for="name">Product Name</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        @error('name') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="description">Description</label>
        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
        @error('description') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" value="{{ old('price') }}" step="0.01">
        @error('price') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="quantity">Quantity</label>
        <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}">
        @error('quantity') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="image">Product Image</label>
        <input type="file" name="image" class="form-control">
        @error('image') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-control">
            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('status') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="form-group mb-3">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
        @error('category_id') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Save Product</button>
</form>
@endsection
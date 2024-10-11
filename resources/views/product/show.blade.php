@extends('layout.app')

@section('hero-banner')

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">{{ $product->name }}</h2>
        </div>
        <div class="card-body">
            <p class="card-text">{{ $product->description ?? "Description not available" }}</p>
            <p class="card-text"><strong>Category:</strong> {{ $product->category->name }}</p>
        </div>
        <div class="card-footer text-end">
            <!-- Edit Button -->
            <a href="{{ route('products.edit', $product) }}" class="btn btn-warning me-2">Edit Product</a>

            <!-- Delete Form -->
            <form action="{{ route('products.destroy', $product) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this product?');" class="d-inline">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Delete Product</button>
            </form>

            <!-- Back Button -->
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Products</a>
        </div>
    </div>
</div>

@endsection

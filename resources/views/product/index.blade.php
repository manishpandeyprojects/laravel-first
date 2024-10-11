@extends('layout.app')

@section('hero-banner')

<section class="product-list">
    <a href="{{route('products.create')}}" class="btn btn-primary mb-4">Create Product</a>

    @if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{session()->get('message')}}
    </div>

    @endif

    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card mb-4">
                <!-- Product Image -->
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" style="aspect-ratio: 1/1" alt="{{ $product->name }}">
                @else
                <img src="https://via.placeholder.com/150" class="card-img-top" style="aspect-ratio: 1/1" alt="Default Image">
                @endif

                <div class="card-body">
                    <!-- Product Name -->
                    <h5 class="card-title">{{ $product->name }}</h5>

                    <!-- Product Description -->
                    <p class="card-text">{{ $product->description ?? "Description not available" }}</p>

                    <!-- Product Category -->
                    <p class="card-text">
                        <strong>Category:</strong> {{ $product->category->name }}
                    </p>

                    <!-- Product Price -->
                    <p class="card-text">
                        <strong>Price:</strong> ${{ number_format($product->price, 2) }}
                    </p>

                    <!-- Product Quantity -->
                    <p class="card-text">
                        <strong>Quantity:</strong> {{ $product->quantity }}
                    </p>

                    <!-- Product Status -->
                    <p class="card-text">
                        <strong>Status:</strong>
                        @if($product->status == 1)
                        <span class="text-success">Active</span>
                        @else
                        <span class="text-danger">Inactive</span>
                        @endif
                    </p>

                    <!-- Action Links -->
                    <a href="{{route('products.show', $product)}}" class="btn btn-outline-primary">Show</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
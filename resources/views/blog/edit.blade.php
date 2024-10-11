@extends('layout.app')

@section('hero-banner')
<section class="blog-edit">
    <h3 class="mb-4">Edit Blog Post</h3> <!-- Added title for clarity -->
    
    <form action="{{ route('blogs.update', $blog) }}" method="post">
        @csrf
        @method('PUT') <!-- This indicates that the form is for updating -->

        <div class="form-group mb-3">
            <label for="name">Blog Title</label> <!-- Added label for the input -->
            <input type="text" name="name" class="form-control" value="{{ old('name', $blog->name) }}" required>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-3">
            <label for="description">Blog Description</label> <!-- Added label for the textarea -->
            <textarea name="description" class="form-control" rows="5" required>{{ old('description', $blog->description) }}</textarea>
            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Blog</button>
    </form>
</section>
@endsection

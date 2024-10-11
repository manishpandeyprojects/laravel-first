@extends('layout.app')

@section('hero-banner')
<section class="blog-page">

    <h2 class="mb-4">{{ $blog->name }}</h2>
    <p class="lead">{{ $blog->description }}</p>

    <div class="d-flex justify-content-between mt-4">
        <form action="{{ route('blogs.destroy', $blog) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this blog?');">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-secondary">Edit</a>
    </div>
</section>
@endsection
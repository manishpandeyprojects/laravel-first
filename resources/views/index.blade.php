@extends('layout.app')

@section('hero-banner')
<section class="blog-listing">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Blog Listings</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Create Blog</a>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->name }}</h5>
                        <p class="card-text">{{ Str::limit($blog->description, 100) }}</p>
                        <p class="card-text"><small class="text-muted">Created by: {{ $blog->user->name }}</small></p>
                        <a href="{{ route('blogs.show', $blog) }}" class="btn btn-info">Show</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
@endsection

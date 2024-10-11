@extends('layout.app')

@section('hero-banner')

<section class="create-blog">
    <h3 class="mb-4">Create Blog Post</h3>
    <form action="{{route('blogs.store')}}" method="post">
        @csrf
        <div class="form-group mb-3">
            <input type="text" name="name" class="form-control">
            @error('name') {{$message}} @enderror()
        </div>
        <div class="form-group mb-3">
            <textarea name="description" class="form-control" id=""></textarea>
            @error('description') {{$message}} @enderror()
        </div>
        <button type="submit" class="btn btn-primary">
            Save Blog
        </button>
    </form>
</section>

@endsection()
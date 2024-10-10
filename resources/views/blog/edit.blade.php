@extends('layout.app')

@section('hero-banner')
<form action="{{ route('blogs.update', $blog) }}" method="post">
    @csrf
    @method('PUT') <!-- This indicates that the form is for updating -->

    <div class="form-group mb-3">
        <input type="text" name="name" class="form-control" value="{{ old('name', $blog->name) }}">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group mb-3">
        <textarea name="description" class="form-control">{{ old('description', $blog->description) }}</textarea>
        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update Blog</button>
</form>
@endsection
@extends('layout.app')

@section('hero-banner')
<h2>{{$blog->name}}</h2>
<p>{{$blog->description}} </p>
<form action="{{route('blogs.destroy', $blog)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Delete</button>
</form>


<a href="{{ route('blogs.edit', $blog) }}" class="btn btn-secondary">Edit</a>

@endsection()
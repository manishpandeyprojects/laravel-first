@extends('layout.app')

@section('hero-banner')
<a href="{{route('blogs.create')}}">Create Blog</a>

@if(session()->has('message'))
{{session()->get('message')}}
@endif

@foreach($blogs as $blog)
<h2>{{$blog->name}}</h2>
<p>{{$blog->description}} created by: {{$blog->user->name}} <a href="{{route('blogs.show', $blog)}}">Show</a> </p>
@endforeach
@endsection()
@extends('layouts.app')

@section('content')

<h1>Post details</h1>

<h3>Name Author: {{ $post->name }}</h3>
<h3>Post published at: {{ $post->time_post }}</h3>
<h3>ID Post: {{ $post->id }}</h3>

<a class="btn btn-primary" href="{{ route('admin.posts.index') }}">BACK</a>

@endsection

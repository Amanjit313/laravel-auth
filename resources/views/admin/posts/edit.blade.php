@extends('layouts.app')

@section('content')

<h1>Post Edit</h1>

<form action="{{ route('admin.posts.update', $post) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="col-3">
      <label for="name" class="form-label">Name Author</label>
      <input type="text" id="name"
             name="name"
             value="{{ $post->name }}"
             class="form-control"
             placeholder="Name Author...">
    </div>

    <div class="col-3">
      <label for="location" class="form-label">Location Author</label>
      <input type="text" id="location"
             name="location"
             value="{{ $post->location }}"
             class="form-control"
             placeholder="Location Author...">
    </div>

    <button type="submit" class="btn btn-success">EDIT</button>
    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">BACK</a>

  </form>

@endsection

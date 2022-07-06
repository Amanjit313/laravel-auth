@extends('layouts.app')

@section('content')

<h1>New Author Post Create</h1>

<form action="{{ route('admin.posts.store', $post) }}" method="POST">

    @csrf

    <div class="col-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" id="name"
             name="name"
             value="{{ $post->name }}"
             class="form-control"
             placeholder="Name...">
    </div>

    <div class="col-3">
      <label for="location" class="form-label">Location</label>
      <input type="text" id="location"
             name="location"
             value="{{ $post->location }}"
             class="form-control"
             placeholder="Location...">
    </div>

    <div class="col-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" id="email"
             name="email"
             value="{{ $post->email }}"
             class="form-control"
             placeholder="Email...">
    </div>

    <button type="submit" class="btn btn-success">CREATE</button>
    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">BACK</a>

  </form>

@endsection
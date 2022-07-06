@extends('layouts.app')

@section('content')

<h1>Author n°{{ $post->id }} Post Edit</h1>

<form action="{{ route('admin.posts.update', $post) }}" method="POST">

    @csrf
    @method('PUT')

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

    <br>
    <button type="submit" class="btn btn-success">EDIT</button>
    <a class="btn btn-primary" href="{{ route('admin.posts.index') }}">BACK</a>

  </form>

@endsection

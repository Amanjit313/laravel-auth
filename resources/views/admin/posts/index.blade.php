@extends('layouts.app')

@section('content')
<br>
<hr>

<table class="table">
    <thead>
        <tr>
            <th class="col-1">ID</th>
            <th class="col-3">NAME</th>
            <th class="col-3">LOCATION</th>
            <th class="col-3">EMAIL</th>
            <th class="col-3"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th>
                <p>{{ $post->id }}</p>
            </th>
            <td>
                <p>{{ $post->name }}</p>
            </td>
            <td>
                <p>{{ $post->location }}</p>
            </td>
            <td>
                <p>{{ $post->email }}</p>
            </td>
            <td>
                <a class="btn btn-success" href="{{ route('admin.posts.show', $post) }}">SHOW</a>
                <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post) }}">EDIT</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

<hr>
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection

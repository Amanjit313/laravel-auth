@extends('layouts.app')

@section('content')
<br>
<hr>

<table class="table">
    <thead>
        <tr>
            <th class="col-1">ID</th>
            <th class="col-3">NAME</th>
            <th class="col-3">TIME POST</th>
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
                <p>{{ $post->time_post }}</p>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection

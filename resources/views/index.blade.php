@extends('layouts.master')

@section('title', 'Post Lists')

@section('content')

<div class="container mt-5">
    @if(Session::has('status'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    @endif
    <h1>Post List</h1>
    <div class="table-responsive mt-3">
        <table class="table table-hovered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1 @endphp
                @foreach($posts as $post)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>
                        <a href='{{ url("posts/$post->id") }}' class="btn btn-sm btn-primary">Edit</a>
                        <a href='{{ url("post/$post->id/delete") }}' class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
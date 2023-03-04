@extends('layouts.master')

@section('title', 'Add Post')

@section('content')

<div class="container mt-5">
    <form class="col-md-6 offset-md-3" action='{{ url("posts/$post->id") }}' method="post">
       
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @if(Session::has('status'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

        <h2>Edit Post</h2>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $err }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
        @endif
        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="des" class="form-label">Description</label>
            <textarea name="des" id="des" cols="30" rows="10" class="form-control" placeholder="Enter Description">{{ $post->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
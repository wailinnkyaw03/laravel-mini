@extends('../layouts.master')

@section('title', 'Add User')

@section('content')

<div class="container mt-5">
    <form class="col-md-6 offset-md-3" action="{{ url('login') }}" method="post">
       
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @if(Session::has('status'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('status') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endif

        <h2>Please Login</h2>
        @if($errors->any())
        @foreach($errors->all() as $err)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $err }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endforeach
        @endif
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="*****">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

@endsection
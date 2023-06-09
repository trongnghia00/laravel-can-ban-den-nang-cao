@extends('layouts.master')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <h2>Login</h2>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route("login.submit") }}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input name="username" class="form-control" value="{{old('username')}}" />
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" value="{{old('email')}}" />
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

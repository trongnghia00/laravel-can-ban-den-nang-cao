@extends('layouts.master')

@section('content')
<div class="row mt-5 justify-content-center">
    <div class="col-md-4">
        <h2>Login</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{ route("login.submit") }}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input name="username" class="form-control" />
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" />
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

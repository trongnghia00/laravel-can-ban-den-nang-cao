@extends('layouts.master')

@section('content')
<main class="container">
    <h1>Home page</h1>
    <div class="row mt-5">
        @foreach ($posts as $post)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4>{{$post->title}}</h4>
                        <p>{{$post->description}}</p>
                        <p>{{$post->category->name}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection

@extends('layouts.master')

@section('content')
<main class="container">
    <h1>Home page</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="row mt-5">
        @foreach ($articles as $article)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{ $article['title'] }}</h5>
                    <p class="card-text">{{ $article['content'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
@endsection

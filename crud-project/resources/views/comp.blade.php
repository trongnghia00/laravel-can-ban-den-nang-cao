@extends('layouts.master')

@section('pageTitle', 'Component page')

@section('content')
<div class="row">
    @foreach ($posts as $post)
        <x-post.index :post="$post" />
    @endforeach
</div>
@endsection

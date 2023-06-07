@extends('layouts.master')

@section('pageTitle', 'Show a post')

@section('content')

<div class="main-content my-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Show a post</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{route('index')}}" class="btn btn-success">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <tbody>
                    <tr>
                        <td>Id</td>
                        <td>{{$post->id}}</td>
                    </tr>
                    <tr>
                        <td>Image</td>
                        <td><img src="{{asset($post->image)}}" width="300px" /></td>
                    </tr>
                    <tr>
                        <td>Title</td>
                        <td>{{$post->title}}</td>
                    </tr>
                    <tr>
                        <td>Description</td>
                        <td>{{$post->description}}</td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>{{$post->category->name}}</td>
                    </tr>
                    <tr>
                        <td>Publish Date</td>
                        <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection

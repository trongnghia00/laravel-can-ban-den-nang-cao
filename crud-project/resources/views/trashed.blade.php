@extends('layouts.master')

@section('pageTitle', 'Trashed posts')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>Trashed posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{route('index')}}" class="btn btn-success">Home</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered border-dark">
                <thead>
                  <tr>
                    <th scope="col" style="width: 5%">#</th>
                    <th scope="col" style="width: 10%">Image</th>
                    <th scope="col" style="width: 20%">Title</th>
                    <th scope="col" style="width: 25%">Description</th>
                    <th scope="col" style="width: 10%">Category</th>
                    <th scope="col" style="width: 10%">Publish Date</th>
                    <th scope="col" style="width: 20%">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>
                            <img src="{{asset($post->image)}}" width="80" />
                        </td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->description}}</td>
                        <td>{{$post->category->name}}</td>
                        <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                        <td>
                            <div class="d-flex" style="height: 38px">
                                <a href="{{route('restore', $post->id)}}" class="btn btn-success">Restore</a>&nbsp;
                                <form action="{{route('forceDelete', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection

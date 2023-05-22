@extends('layouts.master')

@section('pageTitle', 'Index page')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4>All posts</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{route('create')}}" class="btn btn-success">Create</a>&nbsp;
                    <a href="#" class="btn btn-dark">Trashed</a>
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
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="https://picsum.photos/200" width="80" />
                    </td>
                    <td>Consequat labore tempor id cillum.</td>
                    <td>Proident magna incididunt aliqua nostrud id. Nisi adipisicing laborum cupidatat id reprehenderit dolor ipsum sunt. In sit incididunt eu in consequat consequat. </td>
                    <td>News</td>
                    <td>25-05-2023</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-success">Show</a>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection

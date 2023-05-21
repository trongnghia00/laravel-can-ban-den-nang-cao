@extends('layouts.master')

@section('pageTitle', 'Index page')

@section('content')

<div class="main-content mt-5">
    <div class="card">
        <div class="card-header">
            All posts
            <a href="#" class="btn btn-success">Create</a>
            <a href="#" class="btn btn-dark">Trashed</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" style="width: 5%">#</th>
                    <th scope="col" style="width: 10%">Image</th>
                    <th scope="col" style="width: 20%">Title</th>
                    <th scope="col" style="width: 30%">Description</th>
                    <th scope="col" style="width: 10%">Category</th>
                    <th scope="col" style="width: 10%">Publish Date</th>
                    <th scope="col" style="width: 15%">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="https://picsum.photos/200" width="80" />
                    </td>
                    <td>Consequat labore tempor id cillum.</td>
                    <td>Proident magna incididunt aliqua nostrud id. Nisi adipisicing laborum cupidatat id reprehenderit dolor ipsum sunt. In sit incididunt eu in consequat consequat. Velit eiusmod quis ullamco aliqua tempor cillum cillum nostrud quis. Commodo eu adipisicing in qui aute in minim reprehenderit commodo. Sit consectetur ex officia ea minim labore ut consectetur ea ad ad fugiat qui. Id proident do ad qui ipsum.</td>
                    <td>News</td>
                    <td>25-05-2023</td>
                    <td>
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

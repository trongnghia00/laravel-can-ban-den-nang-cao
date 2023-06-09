@extends('layouts.master')

@section('content')
<main class="container">
    <img src="{{asset('images/new_image.jpg')}}" />
    <div class="col-md-4 mt-5">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="{{route('upload.submit')}}">
                    @csrf
                    <div class="form-group">
                        <label for="">Upload</label>
                        <input class="form-control" name="image" type="file" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success mt-2">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <a href="{{route('download')}}" class="btn btn-primary mt-3">Download Image</a>
</main>
@endsection

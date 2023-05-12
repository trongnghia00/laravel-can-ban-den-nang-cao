@extends('layouts.master')

@section('content')
<main class="container">
    <div class="col-md-4 mt-5">
        <div class="card">
            <div class="card-body">
                <form enctype="multipart/form-data">
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
</main>
@endsection

<x-layout title="Upload new image">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Upload your image
                    </div>
                    <div class="card-body">
                        <x-form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label class="form-label" for="file">File</label>
                                <input class="form-control @error('file')
                                    is-invalid
                                @enderror" type="file" name="file" id="file" />
                                @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control @error('title')
                                    is-invalid
                                @enderror" type="text" name="title" id="title" value="{{ old('title') }}" />
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Upload</button>
                                <a href="{{ route('image.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>


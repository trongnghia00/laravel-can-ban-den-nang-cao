<x-layout title="Edit Image">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Edit your image
                    </div>
                    <div class="card-body">
                        <x-form action="{{ $image->route('update') }}" method="PUT">
                            <div class="mb-4">
                                <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" class="img-fluid" />
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="title">Title</label>
                                <input class="form-control @error('title')
                                    is-invalid
                                @enderror" type="text" name="title" id="title" value="{{ old('title', $image->title) }}" />
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('image.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

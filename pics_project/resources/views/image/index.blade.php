<x-layout title="All images">
    <div class="container-fluid mt-4">
        @if ($message = session('message'))
            <x-alert type="success" dismissible>
                {{ $message }}
            </x-alert>
        @endif

        <div class="row">
            @foreach ($images as $image)
                <div class="col-sm-6 col-lg-4 mb-4">
                    <div class="card">
                        <a href="{{ $image->link() }}">
                            <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" class="card-img-top" />
                        </a>
                        <div class="img-btns">
                            <a class="btn btn-sm btn-info me-2" href="{{ $image->route('edit') }}">Edit</a> |
                            <x-form action="{{ $image->route('destroy') }}" method="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure ?')">Delete</button>
                            </x-form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $images->links() }}
    </div>
</x-layout>



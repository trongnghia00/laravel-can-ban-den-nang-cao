<h1>All images </h1>

<a href="{{ route('image.create') }}">Upload Image</a>

@foreach ($images as $image)
    <div>
        <a href="{{ $image->link() }}">
            <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" width="300px" />
        </a>
    </div>
@endforeach

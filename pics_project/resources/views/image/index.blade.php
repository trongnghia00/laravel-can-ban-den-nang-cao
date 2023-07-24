<h1>All images </h1>

@foreach ($images as $image)
    <div>
        <a href="">
            <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" width="300px" />
        </a>
    </div>
@endforeach

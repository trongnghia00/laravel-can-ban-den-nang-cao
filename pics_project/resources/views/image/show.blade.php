<x-layout title="{{ $image->title }}">
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-9">
                <div>
                    <img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}" class="img-fluid" />
                </div>
            </div>

            <div class="col-md-3">
                <div class="d-flex align-items-center mb-3">
                    <img src="https://i.pravatar.cc/80" alt="Author" class="rounded-circle mr-3">
                    <div class="ms-3">
                        <h5>
                            <a href="#" class="text-decoration-none">
                                {{ $image->user->name }}
                            </a>
                        </h5>
                        <p class="text-muted mb-0">
                            {{ $image->user->getImagesCount() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>



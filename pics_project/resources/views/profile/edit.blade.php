<x-layout title="My profile">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-4 p-4 bg-white shadow rounded">
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4 p-4 bg-white shadow rounded">
                <div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</x-layout>

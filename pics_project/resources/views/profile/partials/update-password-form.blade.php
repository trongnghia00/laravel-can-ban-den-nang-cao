<section>
    <header>
        <h2 class="fs-2 text-dark">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-secondary">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <x-form action="{{ route('password.update') }}" method="PUT" class="mt-6">
        <div class="mt-1">
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div class="mt-1">
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div class="mt-1">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="mt-2 d-flex justify-content-center">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>

        <div class="mt-2 d-flex justify-content-center">
            @if (session('status') === 'password-updated')
                <x-alert type="info" dismissible>{{ __('Saved.') }}</x-alert>
            @endif
        </div>
    </x-form>
</section>

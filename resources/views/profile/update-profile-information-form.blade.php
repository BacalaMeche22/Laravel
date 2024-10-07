<x-form-section submit="updateProfileInformation">

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-12">
            <h1 class="nk-block-title page-title" style="font-size: 22px">
                <span class="font-semibold leading-tight">
                    {{ __('Profile Information') }}
                </span>
            </h1>
            {{ __('Update your account`s profile information and email address.') }}
            <hr class="mt-2">
        </div>

        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{ photoName: null, photoPreview: null }" class="col-span-6 sm:col-span-12">
                <!-- Profile Photo File Input -->
                <input type="file" id="photo" class="hidden" wire:model.live="photo" x-ref="photo"
                    x-on:change="
                                photoName = $refs.photo.files[0].name;
                                const reader = new FileReader();
                                reader.onload = (e) => {
                                    photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);
                        " />
                <center>
                    <!-- Current Profile Photo -->
                    <div class="mt-2" x-show="! photoPreview">
                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                            alt="{{ $this->user->name }}"
                            onerror="this.onerror=null; this.src='{{ asset('storage/no.jpg') }}';"
                            style="width: 200px; height: 200px; border-radius: 50%; object-fit: cover;border: 2px solid #ddd; transition: transform 0.3s ease, box-shadow 0.3s ease;">
                    </div>


                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" x-show="photoPreview" style="display: none;">
                        <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                            x-bind:style="'width: 200px; height: 200px; border-radius: 50%; object-fit: cover;border: 2px solid #ddd; transition: transform 0.3s ease, box-shadow 0.3s ease; background-image: url(\'' +
                            photoPreview + '\');'">
                        </span>
                    </div>

                    <x-secondary-button class="mt-3 me-2" type="button" x-on:click.prevent="$refs.photo.click()">
                        {{ __('Select A New Photo') }}
                    </x-secondary-button>

                    @if ($this->user->profile_photo_path)
                        <x-secondary-button type="button" class="mt-3" wire:click="deleteProfilePhoto">
                            {{ __('Remove Photo') }}
                        </x-secondary-button>
                    @endif

                    <x-input-error for="photo" class="mt-2" />
                </center>
                <hr class="mt-4">
            </div>
        @endif

        <div class="col-span-6 sm:col-span-12">
            <x-label for="name" value="{{ __('Complete Name ') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" required
                autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-12">
            <x-label for="email" value="{{ __('Username / Email Address') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model="state.email" required
                autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) &&
                    !$this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            <em class="icon ni ni-check" style="font-size: 15px"></em>&ensp; {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>

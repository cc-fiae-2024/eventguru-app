<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="offset-sm-3 col-6 text-center">
                <x-authentication-card-logo />
                <h1 class="display-2">{{ __('messages.register.headline') }}</h1>
                <p>{{ __('messages.register.subtitle') }}</p>
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" class="offset-sm-3 col-6">
            @csrf

            <div>
                <x-label for="name" value="{{ __('messages.register.form.name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('messages.register.form.email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('messages.register.form.password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('messages.register.form.password_confirmation') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('messages.register.form.tos', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('messages.register.link.tos').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="mt-4">
                <x-label for="newsletter">
                    <div class="flex items-center">
                        <x-checkbox name="newsletter" id="newsletter" required />
                        <div class="ms-2">
                            {{ __('messages.register.form.newsletter') }}
                        </div>
                    </div>
                </x-label>
            </div>

            <div class="row mt-4">
                {{-- Compensate for !important padding on x-button with max-w --}}
                <x-button class="col-12 mx-auto justify-center border-0 bg-primary normal-case tracking-normal !max-w-[calc(100%-1.5rem)]">
                    {{ __('messages.register.form.signup') }}
                </x-button>
            </div>
            {{-- TODO: Add Social Login --}}

            <div class="row mt-4">
                <p class="col-12 text-center">
                    {!! __('messages.register.form.signin', [
                        'signin' => '<a class="underline text-sm text-primary hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="'.route('login').'">'.__('messages.register.link.login').'</a>'
                    ]) !!}
                </p>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
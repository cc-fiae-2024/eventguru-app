<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div class="text-center">
                <x-authentication-card-logo />
                <h1 class="display-2 pt-2">{{ __('messages.signin.headline') }}</h1>
                <p>{{ __('messages.signin.subtitle') }}</p>
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('messages.signin.form.email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="{{  __('messages.signin.form.email_placeholder') }}" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('messages.signin.form.password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" placeholder="{{  __('messages.signin.form.password_placeholder') }}" />
            </div>

            <div class="mt-4 flex justify-between">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('messages.signin.form.remember_me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('messages.signin.link.password_request') }}
                    </a>
                @endif
            </div>

            <div class="mt-4">
                <x-button class="col-12 mx-auto justify-center border-0 bg-primary normal-case tracking-normal">
                    {{ __('messages.signin.form.signin') }}
                </x-button>
            </div>
            {{-- TODO: Add Social Login --}}

            <div class="row mt-4">
                <p class="col-12 text-center">
                    {!! __('messages.signin.form.register', [
                        'signup' => '<a class="underline text-sm text-primary hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="'.route('register').'">'.__('messages.signin.link.register').'</a>'
                    ]) !!}
                </p>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
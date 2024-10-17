<x-guest-layout>
    <section class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-700 dark:text-gray-200 grid place-items-center">

        <div class="col-10 col-lg-4 mx-auto">
            <h1>{{  __('messages.events.heading.create') }}</h1>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('events.store') }}">
                @csrf

                <div>
                    <x-label for="title" value="{{ __('messages.events.form.title') }}" />
                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" min="3" max="255" required autofocus />
                    <div>@error('title') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror</div>
                </div>

                <div class="mt-4">
                    <x-label for="description" value="{{ __('messages.events.form.description') }}" />
                    <x-textarea id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" min="3" max="4096" required />
                    <div>@error('description') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror</div>
                </div>

                <div class="mt-4">
                    <x-label for="starts_at" value="{{ __('messages.events.form.starts_at') }}" />
                    <x-input id="starts_at" class="block mt-1 w-full" type="datetime-local" name="starts_at" :value="old('starts_at')" min="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}" value="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}" required />
                    <div>@error('starts_at') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror</div>
                </div>
                <div class="mt-4">
                    <x-label for="ends_at" value="{{ __('messages.events.form.ends_at') }}" />
                    <x-input id="ends_at" class="block mt-1 w-full" type="datetime-local" name="ends_at" :value="old('ends_at')" min="{{ \Carbon\Carbon::now()->format('Y-m-d\TH:i') }}" value="{{ \Carbon\Carbon::now()->addDay(1)->format('Y-m-d\TH:i') }}" required />
                    <div>@error('ends_at') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror</div>
                </div>

                <div class="mt-4">
                    <x-label for="event_place" value="{{ __('messages.events.form.place') }}" />
                    <select id="event_place" class="block mt-1 w-full" type="text" name="event_place" :value="old('event_place')" required>
                        @foreach($areas as $area)
                            <optgroup label="{{ $area->name }}">
                                @foreach($area->eventPlaces as $place)
                                <option value="{{ $place->id }}">
                                    {{ $place->zip_code}} {{ $place->name }}
                                </option>
                                @endforeach
                            </optgroup>
                                @endforeach
                    </select>
                    <div>@error('event_place') <span class="text-red-600 dark:text-red-400">{{ $message }}</span> @enderror</div>
                </div>

                <div class="mt-4">
                    <x-button class="col-12 mx-auto justify-center border-0 bg-primary normal-case tracking-normal">
                        {{ __('messages.events.form.submit') }}
                    </x-button>
                </div>
            </form>
            <a href="{{ route('events.index') }}">CANCEL</a>
        </div>
    </section>
</x-guest-layout>
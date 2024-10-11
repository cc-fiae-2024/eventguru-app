@php
    $url = "https://cataas.com/cat/says/" . $event . "?width=1024&height=1024"
@endphp

<div class="bg-gray-800 p-3 px-3 rounded-xl hover:bg-gray-700 relative">
    <div class="hidden absolute top-0 right-0 mr-2 mt-2 bg-orange-600 h-12 w-12 rounded-full md:flex justify-center align-items-center hover:bg-red-3">
        <i class="bi bi-bell-fill text-xl mx-auto"></i>
    </div>
    <img class="aspect-[14/9] w-full rounded-md object-cover" src="{{  $url }}" alt="">
    <h3 class="mt-3 mb-0 text-lg font-semibold leading-8 tracking-tight text-white font-poppins">Supergeiles Event</h3>
    <p class="text-gray-400 mt-0 md:text-xs">
        veranstaltet von ACME Inc.
    </p>
    <p class="text-base leading-5 m-1">
        <i class="bi bi-calendar2-event mr-0.5"></i>
        {{ \Carbon\Carbon::now()->addMonth()->format('D, d.m.y H:i') }}
    </p>
    <p class="text-gray-300">
        <i class="bi bi-geo-alt"></i> München
    </p>
    <div class="flex justify-between">
        <div class="align-middle">
            <i class="bi bi-people-fill text-green-400 placeholder-amber-500"></i>
            <span>{{  random_int(1, 10) }} Teilnehmer</span>
        </div>
        <div>
            <i class="bi bi-ticket-perforated-fill align-middle"></i> Kostenlos
        </div>
    </div>
    <div class="md:hidden mt-3 md:h-4">
        <x-button class="col-12 justify-center border-0 bg-primary normal-case tracking-normal !text-lg font-poppins">
            {{ __('messages.signin.form.signin') }}
        </x-button>
    </div>
</div>

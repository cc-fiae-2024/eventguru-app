<x-guest-layout>
    <section class="mx-auto col-10">
        <a href="{{ route('events.index') }}">ALL EVENTS</a>
        <x-event.card :event="$event"></x-event.card>
    </section>
</x-guest-layout>

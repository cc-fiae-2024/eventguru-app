@props(['events' => []])

<ul role="list" class="px-6 lg:px-8 py-0 mx-auto mt-20 text-gray-200 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
    @foreach($events as $event)
        <li>
            <a href="{{ route('events.show', $event) }}">
                <x-event.card :event="$event"></x-event.card>
            </a>
        </li>
    @endforeach
</ul>

@props(['events' => []])

<ul role="list" class="p-0 mx-auto mt-20 text-gray-200 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 xl:grid-cols-4">
    @foreach($events as $event)
        <li>
            <x-event.card :event="$event"></x-event.card>
        </li>
    @endforeach
</ul>

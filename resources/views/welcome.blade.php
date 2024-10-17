<!DOCTYPE html>
    {{-- Always dark on purpose --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-gray-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EventGuru</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=lato:400,700|open-sans:400,600|poppins:400,600|roboto:400,500" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-white text-black/50 dark:bg-black dark:text-white/50 min-h-screen">

    {{-- Always dark on purpose --}}
    <div class="bg-gray-900 min-h-screen flex flex-col">
        <!-- Header -->
        <header class="px-6">
            <nav class="flex items-center justify-between">
                <a href="/" class="p-1.5">
                    <span class="sr-only">EventGuru</span>
                    {{-- FIXME: On light theme the logo is barely readable --}}
                    <x-application-logo class="h-8 w-auto" />
                </a>

                @if (Route::has('login'))
                    @auth
                        {{-- Already logged in --}}
                        <a
                            href="{{ url('/dashboard') }}"
                            class="text-sm font-semibold leading-6  transition focus:outline-none text-white hover:text-white/80 focus-visible:ring-white"
                        >
                            {{ __('messages.welcome.link.dashboard') }}
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="text-sm font-semibold leading-6  transition focus:outline-none text-white hover:text-white/80 focus-visible:ring-white"
                        >
                            {{ __('messages.welcome.link.login') }}
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="text-sm font-semibold leading-6  transition focus:outline-none text-white hover:text-white/80 focus-visible:ring-white"
                            >
                                {{ __('messages.welcome.link.register') }}
                            </a>
                        @endif
                    @endauth
                @endif
            </nav>
        </header>

        <aside class="relative isolate">
            <!-- Background -->
            <div class="absolute inset-x-0 top-4 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl" aria-hidden="true">
                <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-25" style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)"></div>
            </div>
        </aside>

        <main class="flex-1">
            <!-- Values section -->
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our values</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis.</p>
                </div>
                <dl class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-16">
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-white">
                            <i class="bi bi-rocket-takeoff-fill text-indigo-500 absolute left-1 top-1 h-5 w-5"></i>
                            Be world-class.
                        </dt>
                        <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit aute id magna.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-white">
                            <i class="bi bi-people-fill text-indigo-500 absolute left-1 top-1 h-5 w-5"></i>
                            Take responsibility.
                        </dt>
                        <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-white">
                            <i class="bi bi-people-fill text-indigo-500 absolute left-1 top-1 h-5 w-5"></i>
                            Be supportive.
                        </dt>
                        <dd class="inline">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus voluptas blanditiis et.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-white">
                            {{-- No Bootstrap Icon --}}
                            <svg class="absolute left-1 top-1 h-5 w-5 text-indigo-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M9.664 1.319a.75.75 0 0 1 .672 0 41.059 41.059 0 0 1 8.198 5.424.75.75 0 0 1-.254 1.285 31.372 31.372 0 0 0-7.86 3.83.75.75 0 0 1-.84 0 31.508 31.508 0 0 0-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 0 1 3.305-2.033.75.75 0 0 0-.714-1.319 37 37 0 0 0-3.446 2.12A2.216 2.216 0 0 0 6 9.393v.38a31.293 31.293 0 0 0-4.28-1.746.75.75 0 0 1-.254-1.285 41.059 41.059 0 0 1 8.198-5.424ZM6 11.459a29.848 29.848 0 0 0-2.455-1.158 41.029 41.029 0 0 0-.39 3.114.75.75 0 0 0 .419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 1 0 1.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 0 1 3.095 2.348.75.75 0 0 0 .992 0 26.547 26.547 0 0 1 5.93-3.95.75.75 0 0 0 .42-.739 41.053 41.053 0 0 0-.39-3.114 29.925 29.925 0 0 0-5.199 2.801 2.25 2.25 0 0 1-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 0 1-1.084 3.45 26.503 26.503 0 0 0-1.281-.78A5.487 5.487 0 0 0 6 12v-.54Z" clip-rule="evenodd" />
                            </svg>
                            Always learning.
                        </dt>
                        <dd class="inline">Iure sed ab. Aperiam optio placeat dolor facere. Officiis pariatur eveniet atque et dolor.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-white">
                            <i class="bi bi-stars text-indigo-500 absolute left-1 top-1 h-5 w-5"></i>
                            Share everything you know.
                        </dt>
                        <dd class="inline">Laudantium tempora sint ut consectetur ratione. Ut illum ut rem numquam fuga delectus.</dd>
                    </div>
                    <div class="relative pl-9">
                        <dt class="inline font-semibold text-white">
                            <i class="bi bi-sun-fill text-indigo-500 absolute left-1 top-1 h-5 w-5"></i>
                            Enjoy downtime.
                        </dt>
                        <dd class="inline">Culpa dolorem voluptatem velit autem rerum qui et corrupti. Quibusdam quo placeat.</dd>
                    </div>
                </dl>
            </div>

            @auth
                <div class="mx-auto max-w-7xl px-6 lg:px-8 relative text-center">
                    <a href="{{ route('events.create') }}">NEW EVENT</a>
                </div>
            @endauth

            <x-event.list :events="$events"></x-event.list>
        </main>
        <x-footer></x-footer>
    </div>
    </body>
</html>

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('messages.event_overview.heading') }}
            </h2>

            <nav class="navbar navbar-expand-lg w-full">
                <div class="container-fluid w-full">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('messages.event_overview.menu_button') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-house"></i>
                                        {{ __('messages.event_overview.nav.home') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-bell"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.notifications') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-calendar2-event"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.events') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-person-circle"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.profile') }}
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="bi bi-envelope"></i>
                                    <span class="visually-hidden-focusable">
                                        {{ __('messages.event_overview.nav.mails') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
